<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tests extends Controller_Base {

	public function action_index()
	{
		$test_results = array();
		
		// Test User Module
    	$user = ORM::factory('User')->create_user_if_not_exist(array(
            'username'     => 'test_1',
            'email'        => 'test@test.com',
            'network_id'   => '1',
            'name'         => 'Test user',
            'userpic_url'  => '',
    	));
    	
    	if ($user->loaded())
    	{
        	$test_results[] = array(
        	   'title'     => 'Create a new user',
        	   'passed'    => 1,
        	   'error_msg' => '',
        	);
    	}
    	
		// Test Project Module
    	try
    	{
        	$project = ORM::factory('Project')->set_user($user)
        	   ->add_project(array(
        	       'name' => 'Project test',
        	   ))
        	   ->delete_project();
        	
        	$test_results[] = array(
        	   'title'     => 'Create a new project',
        	   'passed'    => 1,
        	   'error_msg' => '',
        	);
    	}catch (Kohana_Exception $e) {
        	$test_results[] = array(
        	   'title'     => 'Create a new project',
        	   'passed'    => 0,
        	   'error_msg' => $e->getMessage(),
        	);
        }


    	try
    	{
        	$project = ORM::factory('Project')->add_project(array(
        	   'name' => 'Project test',
        	));
        	
        	$test_results[] = array(
        	   'title'     => 'Create a new project without the user',
        	   'passed'    => 0,
        	   'error_msg' => '',
        	);
    	}catch (Kohana_Exception $e) {
        	$test_results[] = array(
        	   'title'     => 'Create a new project without the user',
        	   'passed'    => 1,
        	   'error_msg' => '',
        	);
        }
        

    	try
    	{
        	$project = ORM::factory('Project')->set_user($user)
        	   ->add_project(array(
        	       'name' => 'Project test',
        	   ))
        	   ->edit_project(array(
        	       'name' => 'Project Test Renamed',
        	   ))
        	   ->delete_project();
        	
        	
        	$test_results[] = array(
        	   'title'     => 'Edit project data',
        	   'passed'    => 1,
        	   'error_msg' => '',
        	);
    	}catch (Kohana_Exception $e) {
        	$test_results[] = array(
        	   'title'     => 'Edit project',
        	   'passed'    => 0,
        	   'error_msg' => $e->getMessage(),
        	);
        }

    	try
    	{
        	$project = ORM::factory('Project')
        	   ->set_user($user)
        	   ->add_project(array(
        	       'name' => 'Project test',
        	   ));
            
            ORM::factory('Project', $project->id)->edit_project(array(
                'name' => 'Project Test Renamed',
            ));

        	$project->delete_project();
        	
        	$test_results[] = array(
        	   'title'     => 'Edit project data without user',
        	   'passed'    => 0,
        	   'error_msg' => '',
        	);
    	}catch (Kohana_Exception $e) {

        	$project->delete_project();

        	$test_results[] = array(
        	   'title'     => 'Edit project data without user',
        	   'passed'    => 1,
        	   'error_msg' => '',
        	);
        }

    	try
    	{
        	$project = ORM::factory('Project')
        	   ->set_user($user)
        	   ->add_project(array(
        	       'name' => 'Project test',
        	   ))->delete_project();
        	
        	$test_results[] = array(
        	   'title'     => 'Delete a project',
        	   'passed'    => 1,
        	   'error_msg' => '',
        	);
    	}catch (Kohana_Exception $e) {
        	$test_results[] = array(
        	   'title'     => 'Delete a project',
        	   'passed'    => 0,
        	   'error_msg' => $e->getMessage(),
        	);
        }

    	try
    	{
        	$project = ORM::factory('Project')
        	   ->set_user($user)
        	   ->add_project(array(
        	       'name' => 'Project test',
        	   ));
        	
            ORM::factory('Project', $project->id)->delete_project();

        	$project->delete_project();
        	
        	$test_results[] = array(
        	   'title'     => 'Delete a project without user',
        	   'passed'    => 0,
        	   'error_msg' => '',
        	);
    	}catch (Kohana_Exception $e) {
        	$project->delete_project();

        	$test_results[] = array(
        	   'title'     => 'Delete a project without user',
        	   'passed'    => 1,
        	   'error_msg' => '',
        	);
        }    	
    	
    	// Test Task Module
    	try
    	{
        	$project = ORM::factory('Project')
        	   ->set_user($user)
        	   ->add_project(array(
        	       'name' => 'Project test',
        	   ));
        	

        	$task = ORM::factory('Task')
                ->with('project')
                ->set_user($user)
                ->add_task(array(
        	       'task_text'  => 'Text for task',
        	       'project_id' => $project->id,
        	       'status'     => 'opened',
        	   ));
        	
            $project->delete_project();
        	
        	$test_results[] = array(
        	   'title'     => 'Create a new task',
        	   'passed'    => 1,
        	   'error_msg' => '',
        	);
    	}catch (Kohana_Exception $e) {
        	$project->delete_project();

        	$test_results[] = array(
        	   'title'     => 'Create a new task',
        	   'passed'    => 0,
        	   'error_msg' => $e->getMessage(),
        	);
        }      	

    	try
    	{
        	$project = ORM::factory('Project')
        	   ->set_user($user)
        	   ->add_project(array(
        	       'name' => 'Project test',
        	   ));
        	

        	$task = ORM::factory('Task')
                ->with('project')
                ->set_user($user)
                ->add_task(array(
        	       'task_text'  => 'Text for task',
        	       'project_id' => $project->id,
        	       'status'     => 'opened',
        	   ));
        
           ORM::factory('Task', $task->id)
                ->set_user($user)
                ->edit_task(array(
        	        'task_text'  => 'Text for task New',
    	        	'project_id' => $project->id,
    	        	'status'     => 'done',
    	       ));
        	   
        	
            $project->delete_project();
        	
        	$test_results[] = array(
        	   'title'     => 'Edit task info',
        	   'passed'    => 1,
        	   'error_msg' => '',
        	);
    	}catch (Kohana_Exception $e) {
        	$project->delete_project();

        	$test_results[] = array(
        	   'title'     => 'Edit task info',
        	   'passed'    => 0,
        	   'error_msg' => $e->getMessage(),
        	);
        }      	
        
        
    	try
    	{
        	$project = ORM::factory('Project')
        	   ->set_user($user)
        	   ->add_project(array(
        	       'name' => 'Project test',
        	   ));
        	

        	$task = ORM::factory('Task')
                ->with('project')
                ->set_user($user)
                ->add_task(array(
        	       'task_text'  => 'Text for task',
        	       'project_id' => $project->id,
        	       'status'     => 'opened',
        	   ));
            
            $task->delete_task();
            
            $project->delete_project();
        	
        	$test_results[] = array(
        	   'title'     => 'Delete a task',
        	   'passed'    => 1,
        	   'error_msg' => '',
        	);
    	}catch (Kohana_Exception $e) {
        	$project->delete_project();

        	$test_results[] = array(
        	   'title'     => 'Delete a task',
        	   'passed'    => 0,
        	   'error_msg' => $e->getMessage(),
        	);
        }          
		
        $this->view = View::factory('todo/tests.tpl');
        $this->view->test_results = $test_results;
		
	}

} // End Tests
