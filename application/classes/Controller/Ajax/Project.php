<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Ajax_Project extends Controller_Base {

    public function action_save()
    {
        $project = ORM::factory('Project')->set_user($this->user);
        $error = '';
        
        try{
            if ($this->request->post('project_id'))
            {
                $project->edit_project($this->request->post('project_id'), $this->request->post());
            }else{
            	$project->add_project($this->request->post());
            }
        }catch (Exception $e) {
        	$error = $e->getMessage();            
        }
         
        echo json_encode(array(
            'status'  => empty($error) ? 1 : 0,
            'error'   => $error,
            'project' => is_object($project) ? Arr::extract($project->as_array(), array('id', 'name')) : array(),
         ));
    }
    
    
    public function action_delete()
    {
        $project = ORM::factory('Project')->set_user($this->user);
        $error = '';

        try{
            $project->delete_project($this->request->post('project_id'));
        }catch (Exception $e) {
        	$error = $e->getMessage();            
        }
         
        echo json_encode(array(
            'status'  => empty($error) ? 1 : 0,
            'error'   => $error,
            'project' => Arr::extract($project->as_array(), array('id', 'name')),
         ));
    }


    public function action_order()
    {
        
        $project = ORM::factory('Project')->set_user($this->user);
        $error = '';

        try{
            $project->set_tasks_order((array)$this->request->post('tasks'));
        }catch (Exception $e) {
        	$error = $e->getMessage();            
        }
         
        echo json_encode(array(
            'status'  => empty($error) ? 1 : 0,
            'error'   => $error,
         ));
    }
}