<?php /* Smarty version Smarty-3.1.5, created on 2013-05-03 23:54:31
         compiled from "/Users/lexa/Projects/todolist/application/views/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76355081151842407bbe8d1-64024541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab5df542b6834b2c703aae500d002855d466a36d' => 
    array (
      0 => '/Users/lexa/Projects/todolist/application/views/footer.tpl',
      1 => 1367614462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76355081151842407bbe8d1-64024541',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_51842407bd698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51842407bd698')) {function content_51842407bd698($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/plugins/modifier.date_format.php';
?><div class="footer">
    <div class="footer-inner">
		<div class="container">
			<div class="row">
    			<div class="span12">Copyright &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 ToDoList</div> 
    		</div> 
		</div> 
	</div> 
</div><?php }} ?>