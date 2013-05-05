<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Project extends ORM 
{
	protected $_has_many = array(
		'task' => array(
			'model' => 'Task',
			'foreign_key' => 'project_id',
		),
	);    
	
	protected $_belongs_to = array(
		'user' => array(
			'model' => 'User',
			'foreign_key' => 'user_id',
		),
	);    
	
	private $errors;
	private $user;

	/**
	 * Set validation rules
	 *
	 */
	public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
			),
			'user_id' => array(
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
	 * Add a new project
	 *
	 * @param array    $data
	 * @param ORM|int  $user
	 * @return $this 
	 */
	public function add_project(array $data, $user = FALSE)
	{
    	if ($user) $this->set_user($user);
    	if (!$this->user->loaded()) throw new Exception('No user found.');
    	
    	$data['created_at'] = $data['updated_at'] = Date::formatted_time('now','Y-m-d H:i:s');
    	
    	$data['user_id'] = $this->user->id;
    	$this->values(Arr::extract($data, array('name', 'user_id', 'created_at', 'updated_at')));
    	
    	try{
            $this->save();	
    	}catch (ORM_Validation_Exception $e) {
        	$this->errors = $e->errors('models');            
        }
    	
    	return $this;
	}
	
	/**
	 * Edit a new project
	 *
	 * @param array $data
	 * @param ORM|int $user
	 * @return $this 
	 */
	public function edit_project($id, array $data, $user = FALSE)
	{
    	if ($user) $this->set_user($user);
    	if (!$this->user->loaded()) throw new Exception('No user found.');

    	$data['updated_at'] = Date::formatted_time('now','Y-m-d H:i:s');
    	$data['user_id'] = $this->user->id;

    	$this->reset();
    	$this->where('id', '=', $id)->find();
    	
    	if (!$this->loaded()) throw new Exception('No project found.');     	
        if (!$this->has_user_access($this->user)) throw new Exception('User can not edit that project');
    	
    	$this->values(Arr::extract($data, array('name', 'user_id', 'updated_at')));
    	
    	try{
            $this->save();	
    	}catch (ORM_Validation_Exception $e) {
        	$this->errors = $e->errors('models');            
        }
    	
    	return $this;
	}	

	/**
	 * Delete project
	 *
	 * @param int             $id
	 * @param ORM|int|false  $user
	 * @return $this 
	 */
	public function delete_project($id, $user = FALSE)
	{
    	if ($user) $this->set_user($user);
    	if (!$this->user->loaded()) throw new Exception('No user found.');

    	$this->reset();
    	$this->where('id', '=', $id)->find();
    	if (!$this->loaded()) throw new Exception('No project found.');     	
    	
    	if ($this->user_id != $this->user->id) throw new Exception('User can not delete that project');
        
    	try{
            $this->delete();    	
    	}catch (ORM_Validation_Exception $e) {
        	$this->errors = $e->errors('models');            
        }
    	
    	return $this;
    	
	}
	
	/**
	 * Set tasks order
	 *
	 * @param array $data
	 * @param ORM|int $user
	 * @return $this 
	 */
	public function set_tasks_order(array $data, $user = FALSE)
	{
    	if ($user) $this->set_user($user);
    	if (!$this->user->loaded()) throw new Exception('No user found.');
    	
    	$order_num = 0;
    	foreach($data as $task_id)
    	{
        	$task = ORM::factory('Task', $task_id)->with('project');
        	if ($task->loaded())
        	{
            	if (!$this->has_user_access($this->user, $task->project_id)) continue;
            	
            	$task->values(array('order_num' => ++$order_num))->save();
        	}
    	}
    	
    	return $this;
	}
	
	/**
	 * Has user the access to the project or not
	 *
	 * @param ORM|int $user
	 * @param ORM|int $project
	 * @return boolean
	 */
	protected function has_user_access($user, $project = FALSE)
	{
    	if (!$user) return FALSE;
    	if (!$user instanceof ORM) $user = ORM::factory('User', $user);
    	if (!$user->loaded()) return FALSE;
    	
    	$project = !$project ? $this : ORM::factory('Project', $project);
    	if (!$project->loaded()) return FALSE;
    	return $user->id == $project->user_id;
    	
	}
	
} // End Task