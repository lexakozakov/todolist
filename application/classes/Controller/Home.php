<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Base {
    
	public function action_index()
	{
        $projects = $this->user ? ORM::factory('Project')->where('user_id', '=', $this->user->id)->order_by('created_at', 'desc')->find_all() : array();
        
        
        $this->view = View::factory('todo/home.tpl');
        $this->view->projects = $projects;
        
	}

} // End Welcome
