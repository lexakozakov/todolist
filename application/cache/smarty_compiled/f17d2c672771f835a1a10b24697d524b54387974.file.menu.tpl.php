<?php /* Smarty version Smarty-3.1.5, created on 2013-05-06 00:28:28
         compiled from "/Users/lexa/Projects/todolist/application/views/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19275472755184265f8be375-58127370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f17d2c672771f835a1a10b24697d524b54387974' => 
    array (
      0 => '/Users/lexa/Projects/todolist/application/views/menu.tpl',
      1 => 1367789304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19275472755184265f8be375-58127370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5184265f8ed18',
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5184265f8ed18')) {function content_5184265f8ed18($_smarty_tpl) {?>	<div class="subnavbar">
		<div class="subnavbar-inner">
			<div class="container">
				<ul class="mainnav">
    				<li<?php if ($_smarty_tpl->tpl_vars['controller']->value=='home'){?> class=" active"<?php }?>>
						<a href="/">
    						<i class="icon-tasks"></i>
							<span>ToDo</span>
						</a>
				    </li>

    				<li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='tests'){?> class=" active"<?php }?>>
						<a href="/tests/">
    						<i class="icon-cogs"></i>
							<span>Tests</span>
						</a>
				    </li>
    				<li <?php if ($_smarty_tpl->tpl_vars['controller']->value=='sql'){?> class=" active"<?php }?>>
						<a href="/sql/">
    						<i class="icon-asterisk"></i>
							<span>SQL Tasks</span>
						</a>
				    </li>
				</ul>
			</div> 
		</div> 
	</div>
<?php }} ?>