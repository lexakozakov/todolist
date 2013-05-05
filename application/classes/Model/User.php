<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Model_Auth_User 
{
    
	protected $_has_many = array(
		//'user_tokens'       => array('model' => 'User_token'),
		//'roles'           => array('model' => 'role', 'through' => 'roles_users'),
		'project'           => array('model' => 'Project', 'foreign_key' => 'user_id'),
	);
	
	
	/**
	 * Rules for the user model. Because the password is _always_ a hash
	 * when it's set,you need to run an additional not_empty rule in your controller
	 * to make sure you didn't hash an empty string. The password rules
	 * should be enforced outside the model or with a model helper method.
	 *
	 * @return array Rules
	 */
	public function rules()
	{
		return array(
			'username' => array(
				array('not_empty'),
				array('max_length', array(':value', 255)),
				array(array($this, 'unique'), array('username', ':value')),
			),
			'email' => array(
				array('not_empty'),
				array('email'),				
				array(array($this, 'unique'), array('email', ':value')),
			),
			'password' => array(
				array('not_empty'),
				array('min_length', array(':value', 3))
			),
		);
	}
	

	/**
	 * Complete the login for a user by incrementing the logins and saving login timestamp
	 *
	 * @return void
	 */
	public function complete_login()
	{
		if ($this->_loaded)
		{
			// Update the number of logins
			$this->logins_cnt = new Database_Expression('logins_cnt + 1');

			// Set the last login date
			$this->last_login_at = Date::formatted_time('now','Y-m-d H:i:s');

			// Set the last login IP
			$this->last_login_ip = ip2long( Arr::get($_SERVER, 'HTTP_X_REAL_IP', Arr::get($_SERVER, 'REMOTE_ADDR', 0)));

			// Save the user
			$this->update();
		}
	}
	

	/**
	* Before create a new user we check whether he has already been existed.
	*
	* @param array $user_data
	*
	* @return $this
	*/
	public function create_user_if_not_exist($user_data)
	{
    	
    	// try to find user by username (username is unique)
        $this->where('username', '=', $user_data['username'])->find();

        if (!$this->loaded())
        {
            $user_data['username']         = $user_data['username'];
            $user_data['password']         = $user_data['email'].'_'.Cookie::$salt;
            $user_data['created_at']       = Date::formatted_time('now','Y-m-d H:i:s');
            $user_data['registered_ip']    = ip2long(
                Arr::get($user_data, 'registered_ip', 
                    Arr::get($_SERVER, 'HTTP_X_REAL_IP', 
                        Arr::get($_SERVER, 'REMOTE_ADDR', 0)
                    )
                )
            );
            
            $post = $user_data;
            $post['password_confirm'] = $user_data['password'];
            
            try {
            	// create new user
                $this->create_user($post, array_keys($user_data));
            }catch (ORM_Validation_Exception $e) {
                // Set errors using custom messages
                $this->errors = $e->errors('models');            
            }
            
            $this->reload();
        }

        return $this;
	}
	
	
} // End User Model