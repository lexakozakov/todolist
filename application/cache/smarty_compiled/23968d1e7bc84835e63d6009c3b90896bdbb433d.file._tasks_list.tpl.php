<?php /* Smarty version Smarty-3.1.5, created on 2013-05-06 00:04:14
         compiled from "/Users/lexa/Projects/todolist/application/views/todo/_tasks_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49422669451855418a6cb03-02649817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23968d1e7bc84835e63d6009c3b90896bdbb433d' => 
    array (
      0 => '/Users/lexa/Projects/todolist/application/views/todo/_tasks_list.tpl',
      1 => 1367787812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49422669451855418a6cb03-02649817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_51855418a9521',
  'variables' => 
  array (
    'hide_add_task' => 0,
    'tasks' => 0,
    'task' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51855418a9521')) {function content_51855418a9521($_smarty_tpl) {?>            <table class="table table-striped table-bordered table-hover task-container">
                <thead<?php if ($_smarty_tpl->tpl_vars['hide_add_task']->value==1){?> style="display:none"<?php }?>>
                    <tr> 
                        <th colspan="3">
                            <div class="input-append">
                                <input type="text" name="add_task" value="" placeholder="Start typing here to create a task">
                                <button class="btn add-task" type="button">Add Task</button>
                            </div>                        
                        </th>
                    <tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['task'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['task']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tasks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['task']->key => $_smarty_tpl->tpl_vars['task']->value){
$_smarty_tpl->tpl_vars['task']->_loop = true;
?>
                    <tr task_id="<?php echo $_smarty_tpl->tpl_vars['task']->value->id;?>
">
                        <td width="10"><input type="checkbox" name="task_status" value="1"<?php if ($_smarty_tpl->tpl_vars['task']->value->status=='done'){?> checked<?php }?>></td>
                        <td class="task_text"><?php if ($_smarty_tpl->tpl_vars['task']->value->status=='done'){?><del><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['task']->value->task_text, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['task']->value->status=='done'){?></del><?php }?></td>
                        <td width="77">
                    	    <a href="#" title="Sort tasks" class="order-tasks"><i class="icon-sort"></i></a> |
                    	    <a href="#" title="Edit task" class="edit-task"><i class="icon-pencil"></i></a> |
                            <a href="#" title="Delete project" class="delete-task"><i class="icon-trash"></i></a>
                            <input type="text" name="task_text" value="">
                        </td>
                    </tr>
                    <?php } ?>
                    
                    <tr class="blank" rel="">
                        <td width="10"><input type="checkbox" name="task_status[]" value="done"></td>
                        <td class="task_text"></td>
                        <td width="77">
                    	    <a href="#" title="Sort tasks" class="order-task"><i class="icon-sort"></i></a> |
                    	    <a href="#" title="Edit task" class="edit-task"><i class="icon-pencil"></i></a> |
                            <a href="#" title="Delete task" class="delete-task"><i class="icon-trash"></i></a>
                            <input type="text" name="task_text" value="">
                        </td>
                    </tr>
                    
                </tbody>
            </table>            
<?php }} ?>