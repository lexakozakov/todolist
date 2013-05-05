<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Sql extends Controller_Base {

	public function action_index()
	{
		
        $this->view = View::factory('sql.tpl');
		
	}

} // End Welcome
