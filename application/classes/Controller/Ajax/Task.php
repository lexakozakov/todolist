<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Ajax_Task extends Controller_Base {

    public function action_save()
    {
        $task = ORM::factory('Task')->set_user($this->user);
        $error = '';
        
        try{
            if ($this->request->post('task_id'))
            {
                $task->edit_task($this->request->post('task_id'), $this->request->post());
            }else{
            	$task->add_task($this->request->post());
            }
        }catch (Exception $e) {
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
        $task = ORM::factory('Task')->set_user($this->user);
        $error = '';

        try{
            $task->delete_task($this->request->post('id'));
        }catch (Exception $e) {
        	$error = $e->getMessage();            
        }
         
        echo json_encode(array(
            'status'  => empty($error) ? 1 : 0,
            'error'   => $error,
        ));
    }
    
    
    public function action_change_status()
    {
        $task = ORM::factory('Task')->set_user($this->user);
        $error = '';
        
        try{
            $task->edit_task($this->request->post('id'), $this->request->post());
        }catch (Exception $e) {
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