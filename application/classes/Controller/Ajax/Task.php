<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Ajax_Task extends Controller_Base {

    public function action_save()
    {
        $error = '';
        
        try{
            if ($this->request->post('task_id'))
            {
            	$task = ORM::factory('Task', $this->request->post('task_id'))
            	    ->with('project')
                    ->set_user($this->user)
                    ->edit_task($this->request->post());
            }else{
            	$task = ORM::factory('Task')
                    ->with('project')
                    ->set_user($this->user)
                    ->add_task($this->request->post());
            }
        }catch (Kohana_Exception $e) {
        	$error = $e->getMessage();            
        }
        
        $task_data = Arr::extract($task->as_array(), array('id', 'task_text', 'status'));
        $task_data['task_text'] = htmlspecialchars($task_data['task_text']);
         
        echo json_encode(array(
            'status'  => empty($error) ? 1 : 0,
            'error'   => $error,
            'task'    => $task_data,
         ));
    }
    


    public function action_delete()
    {
        $error = '';

        try{
        
            ORM::factory('Task', $this->request->post('id'))
                ->with('project')
                ->set_user($this->user)
                ->delete_task();
                
        }catch (Kohana_Exception $e) {
        	$error = $e->getMessage();            
        }
         
        echo json_encode(array(
            'status'  => empty($error) ? 1 : 0,
            'error'   => $error,
        ));
    }
    
    
    public function action_change_status()
    {
        $error = '';
        
        try{
        
            $task = ORM::factory('Task', $this->request->post('id'))
                ->with('project')
                ->set_user($this->user)
                ->edit_task($this->request->post());
                
        }catch (Kohana_Exception $e) {
        	$error = $e->getMessage();            
        }

        $task_data = Arr::extract($task->as_array(), array('id', 'task_text', 'status'));
        $task_data['task_text'] = htmlspecialchars($task_data['task_text']);
         
        echo json_encode(array(
            'status'  => empty($error) ? 1 : 0,
            'error'   => $error,
            'task'    => $task_data,
        ));
        
    }
    
  
}