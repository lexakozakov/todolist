<?php defined('SYSPATH') or die('No direct script access.');
/* 
*  Controller for proccess social activities. 
*  For example, login/logout user through social networks
*
*
*/
class Controller_Facebook extends Controller_Base {

    
    public function before()
    {
        parent::before();

        if(!$this->request->is_initial() or $this->request->is_ajax())
        {
            $this->auto_render = FALSE;
        }        
        
    }

    
    public function action_index()
    {
        HTTP::redirect(URL::site(FALSE, TRUE));
    }
    
    
    public function action_login_response()
    {
        $this->auto_render = FALSE;

        $logged_user_data = array();
        
        if ($this->facebook->logged_in())
        {
            $logged_user_data = array(
                'username'     => 'facebook_'.$this->facebook->user_id(),
                'email'        => $this->facebook->get('email'),
                'network_id'   => $this->facebook->user_id(),
                'name'         => $this->facebook->get('name'),
                'userpic_url'  => $this->facebook->get('pic_big'),
            );  
        }
        
        // create user if he does't exists in out DB. Login him. 
        if (!empty($logged_user_data))
        {
        	$logged_user_data['registered_ip'] = ip2long(Request::$client_ip);
        	
        	$user = ORM::factory('User')->create_user_if_not_exist($logged_user_data);

        	if ($user->id && $user->username)
        	{
                $this->auth->force_login($user->username);
        	}
        }
        
        
        // redirect user after login
        HTTP::redirect(URL::site(FALSE, TRUE));
    }
    
    
    /**
    * Login user
    *
    *
    */
    public function action_login()
    {
        $this->auto_render = FALSE;
        
        HTTP::redirect($this->facebook->logged_in() ?  URL::site(TRUE, FALSE) : $this->facebook->login_url());
    }


    /**
    * Process response after logout user
    *
    *
    */
    public function action_logout_response()
    {
        $this->auto_render = FALSE;
    }
    

    /**
    * Logout user - Common handler
    * 
    *
    */
    public function action_logout()
    {
        $this->auto_render = FALSE;
        
        if($this->facebook->logged_in())
        {
            HTTP::redirect($this->facebook->logout_url());
        }
    }    
    
}