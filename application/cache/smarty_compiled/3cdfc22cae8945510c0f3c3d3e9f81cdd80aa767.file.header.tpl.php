<?php /* Smarty version Smarty-3.1.5, created on 2013-05-05 22:16:04
         compiled from "/Users/lexa/Projects/todolist/application/views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87924942551842385458105-81921787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cdfc22cae8945510c0f3c3d3e9f81cdd80aa767' => 
    array (
      0 => '/Users/lexa/Projects/todolist/application/views/header.tpl',
      1 => 1367781362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87924942551842385458105-81921787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5184238547400',
  'variables' => 
  array (
    'page_main_title' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5184238547400')) {function content_5184238547400($_smarty_tpl) {?>    <div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				
				<a class="brand" href="/"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_main_title']->value)===null||$tmp==='' ? 'ToDo List' : $tmp);?>
</a>		
				
				
				<div class="nav-collapse">
    				
    				<?php if (!$_smarty_tpl->tpl_vars['user']->value){?>
        				<a href="/facebook/login" style="font-size: 24px;" class="nav pull-right">
        					<i class="icon-facebook"></i>
        				</a>		
    				<?php }else{ ?>
    				    <div class="nav pull-right" style="color: #fff">
        				    <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->userpic_url;?>
" class="img-rounded" style="width:50px; height: 50px;">
        				    <?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
 
        				    ( <a href="/home/logout/">Logout</a> )
    				    </div>
    				<?php }?>

					
				</div>
			</div> 
		</div> 
	</div> 
<?php }} ?>