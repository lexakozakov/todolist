<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tests extends Controller_Base {

	public function action_index()
	{
		
        $this->view = View::factory('todo/tests.tpl');
		
	}

} // End Welcome
