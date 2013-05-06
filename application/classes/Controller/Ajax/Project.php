<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Ajax_Project extends Controller_Base {

    public function action_save()
    {
        $error = '';
        
        try{
            if ($this->request->post('project_id'))
            {
                $project = ORM::factory('Project', $this->request->post('project_id'))->set_user($this->user)->edit_project($this->request->post());
            }else{
            	$project = ORM::factory('Project')->set_user($this->user)->add_project($this->request->post());
            }
        }catch (Kohana_Exception $e) {
        	$error = $e->getMessage();            
        }

        $project_data = Arr::extract($project->as_array(), array('id', 'name'));
        $project_data['name'] = htmlspecialchars($project_data['name']);
         
        echo json_encode(array(
            'status'  => empty($error) ? 1 : 0,
            'error'   => $error,
            'project' => $project_data,
        ));
    }
    
    
    public function action_delete()
    {
        $error = '';

        try{
            $project = ORM::factory('Project', $this->request->post('project_id'))->set_user($this->user)->delete_project();
        }catch (ORM_Validation_Exception $e) {
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
        }catch (Kohana_Exception $e) {
        	$error = $e->getMessage();            
        }
         
        echo json_encode(array(
            'status'  => empty($error) ? 1 : 0,
            'error'   => $error,
        ));
    }
}