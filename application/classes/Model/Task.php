<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Task extends ORM 
{
    const STATUS_DONE = 1; 
    
    private $user;
    private $errors;
    
	protected $_belongs_to = array(
		'project' => array(
			'model' => 'Project',
			'foreign_key' => 'project_id',
		),
	);    
    
    
	/**
	 * Set validation rules
	 *
	 */
	public function rules()
	{
		return array(
			'task_text' => array(
				array('not_empty'),
			),
			'project_id' => array(
				array('not_empty'),
			),
		);
	}   
	
	/**
	 * Set user
	 *
	 * @param ORM|int $user
	 * @return $this 
	 */
	public function set_user($user)
	{
    	$this->user =  (!$user instanceof ORM) ? ORM::factory('User', $user) : $user;
    	if (!$this->user->loaded()) throw new Exception('No user found.');
    	
    	return $this;
	}
	
	/**
	 * Add a new task
	 *
	 * @param array    $data
	 * @param ORM|int  $user
	 * @return $this 
	 */
	public function add_task(array $data, $user = FALSE)
	{
    	if ($user) $this->set_user($user);
    	if (!$this->user->loaded()) throw new Exception('No user found.');
    	
    	$data['created_at'] = $data['updated_at'] = Date::formatted_time('now','Y-m-d H:i:s');
    	
    	$data['status'] = 'opened';
    	
    	$tasks = $this->where('project_id', '=', $data['project_id'])->order_by('order_num')->find_all();
        $order_num = 1;
    	foreach($tasks as $task)
    	{
        	$task->values(array('order_num' => ++$order_num))->save();
    	}
    	$data['order_num'] = 1;
    	
    	$this->reset();
    	$this->values(Arr::extract($data, array('task_text', 'project_id', 'status', 'created_at', 'updated_at', 'order_num')));
    	
    	try{
            $this->save();	
    	}catch (ORM_Validation_Exception $e) {
        	$this->errors = $e->errors('models');            
        }
    	
    	return $this;    	
	}

	/**
	 * Edit task
	 *
	 * @param int            $id
	 * @param array          $data
	 * @param ORM|int|false  $user
	 * @return $this 
	 */
	public function edit_task($id, array $data, $user = FALSE)
	{
    	if ($user) $this->set_user($user);
    	if (!$this->user->loaded()) throw new Exception('No user found.');

    	$data['updated_at'] = Date::formatted_time('now','Y-m-d H:i:s');

    	$this->reset();
    	$this->with('project')->where('task.id', '=', $id)->find();
    	
    	if (!$this->loaded()) throw new Exception('No task found.');     	
    	if ($this->project->user_id != $this->user->id) throw new Exception('User can not edit that task');

    	$data['status'] = isset($data['status']) ? $data['status'] : $this->status;
    	$data['project_id'] = isset($data['project_id']) ? $data['project_id'] : $this->project_id;
    	$data['task_text'] = isset($data['task_text']) ? $data['task_text'] : $this->task_text;

    	$this->values(Arr::extract($data, array('task_text', 'project_id', 'status', 'updated_at')));
    	
    	try{
            $this->save();	
    	}catch (ORM_Validation_Exception $e) {
        	$this->errors = $e->errors('models');            
        }
    	
    	return $this;    	
    	
	}

	/**
	 * Delete task
	 *
	 * @param int             $id
	 * @param ORM|int|false  $user
	 * @return $this 
	 */
	public function delete_task($id, $user = FALSE)
	{
    	if ($user) $this->set_user($user);
    	if (!$this->user->loaded()) throw new Exception('No user found.');

    	$this->reset();
    	$this->with('project')->where('task.id', '=', $id)->find();
    	if (!$this->loaded()) throw new Exception('No task found.');     	
    	
    	if ($this->project->user_id != $this->user->id) throw new Exception('User can not delete that task.');
    	
        
    	try{
            $this->delete();    	
    	}catch (ORM_Validation_Exception $e) {
        	$this->errors = $e->errors('models');            
        }
    	
    	return $this;    	
    	
	}
	
} // End Task