<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

    public $template = 'global.tpl';

    public function before()
    {
        parent::before();

        if(!$this->request->is_initial() || $this->request->is_ajax())
        {
            $this->auto_render = FALSE;
        }        

        $this->auth  = Auth::instance();	
        $this->user  = $this->auth->get_user();
        $this->facebook = FacebookAuth::factory();
        
        // set global vareiables for template
        View::set_global('controller', mb_strtolower($this->request->controller()));
        View::set_global('action', mb_strtolower($this->request->action()));
        View::set_global('user', $this->user);
    }
    
    public function after()
    {
        if (property_exists($this, 'view') && is_object($this->view))
        {
            $this->template->host = URL::base(TRUE, TRUE);
            $this->template->main_content = $this->view->render();
        } 
        
        parent::after();
    }
    
    public function action_logout()
    {
        $this->auth->logout(TRUE);
        HTTP::redirect(URL::base(TRUE, TRUE));        
    }


} // End Base



