<?php /* Smarty version Smarty-3.1.5, created on 2013-05-05 15:39:01
         compiled from "/Users/lexa/Projects/todolist/application/views/global.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112659540051842102a87687-94614767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfc35bd5da9c854fd04ed61a96fe4d406ddf89c2' => 
    array (
      0 => '/Users/lexa/Projects/todolist/application/views/global.tpl',
      1 => 1367757500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112659540051842102a87687-94614767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_51842102ae956',
  'variables' => 
  array (
    'meta' => 0,
    'main_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51842102ae956')) {function content_51842102ae956($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['meta']->value['title'])===null||$tmp==='' ? 'ToDoList' : $tmp);?>
</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    <meta name="description" content="todo list" />
	<meta name="keywords" content="todo" />

    <!--[if IE 7]>
        <link href="/assets/css/ie7-fix.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    	
	<link href="/assets/css/jquery/ui-lightness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet" type="text/css" />
	<link href="/assets/css/common.css" rel="stylesheet" type="text/css" />    
    
    
    <script type="text/javascript" src="/assets/js/jquery/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="/assets/js/bootstrap/bootstrap.min.js"></script>    
    <script type="text/javascript" src="/assets/js/bootstrap/bootstrap-confirm.js"></script>    
    <script type="text/javascript" src="/assets/js/todolist.js"></script>    
    
    
    
</head>

<body>

<div class="all">
    
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<div class="main">
		<div class="main-inner">
		    <div class="container">
    		    <div class="row">
        		    <div class="span12">
    		         
            		    <div class="page-submenu btn-group"> </div>
            		    <div class="widget">
													
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['main_content']->value)===null||$tmp==='' ? 'No content supplied' : $tmp);?>


                        </div> 
                    </div> 
                </div> 
		    </div> 
		</div> 
	</div> 
	<div class="footer-clean"></div>
				
</div> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html><?php }} ?>