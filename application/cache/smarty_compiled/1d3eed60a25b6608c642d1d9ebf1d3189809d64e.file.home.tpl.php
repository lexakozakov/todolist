<?php /* Smarty version Smarty-3.1.5, created on 2013-05-05 23:57:27
         compiled from "/Users/lexa/Projects/todolist/application/views/todo/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17108916875184265f7fb018-28739169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d3eed60a25b6608c642d1d9ebf1d3189809d64e' => 
    array (
      0 => '/Users/lexa/Projects/todolist/application/views/todo/home.tpl',
      1 => 1367787424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17108916875184265f7fb018-28739169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5184265f83529',
  'variables' => 
  array (
    'user' => 0,
    'projects' => 0,
    'project' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5184265f83529')) {function content_5184265f83529($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['user']->value){?>
<div class="container projects-container">
    <div class="row" >

        <div class="add-project-block" >
            <button class="btn btn-large add-project" type="button">Add Project</button>
        </div>

        
        <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
        
        <div class="project" project_id="<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
">
            <div class="project_name">
            	<div class="project-icon"><i class="icon-calendar"></i></div>
            	
            	<div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['project']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <input type="text" name="project_name" placeholder="Enter project name" value="" maxlength="255">
            	
                <div class="pull-right edit-block">
                    <a href="#" title="Edit project" class="edit-project"><i class="icon-pencil"></i></a> |
                    <a href="#" title="Delete project" class="delete-project"><i class="icon-trash"></i></a>
                </div>
                
            </div>
            
            <div class="clearfix"></div>
            
            <?php echo $_smarty_tpl->getSubTemplate ("todo/_tasks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('tasks'=>$_smarty_tpl->tpl_vars['project']->value->task->order_by('order_num')->find_all(),'hide_add_task'=>0), 0);?>

        </div>
        <?php } ?>
        
        <div class="project" id="project-blank" project_id="">
            <div class="project_name">
            	<div class="project-icon"><i class="icon-calendar"></i></div>
            	<div class="name"></div>
            	<input type="text" name="project_name" placeholder="Enter project name" value="" maxlength="255">
                <div class="pull-right edit-block">
                    <a href="#" title="Edit project" class="edit-project"><i class="icon-pencil"></i></a> |
                    <a href="#" title="Delete project" class="delete-project"><i class="icon-trash"></i></a>
                </div>
                <div class="clear"></div>
            </div>            
            
            <?php echo $_smarty_tpl->getSubTemplate ("todo/_tasks_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('tasks'=>array(),'hide_add_task'=>1), 0);?>

        </div>        

        
    </div>
</div>
<?php }else{ ?>
    <p>Please <a href="/facebook/login" title="login via facebook">login via facebook</a>, before start to use todo list.</p>
<?php }?><?php }} ?>