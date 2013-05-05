<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
	<title>{$meta.title|default:'ToDoList'}</title>
	
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
    
    {include file="header.tpl"}
    {include file="menu.tpl"}

	<div class="main">
		<div class="main-inner">
		    <div class="container">
    		    <div class="row">
        		    <div class="span12">
    		         
            		    <div class="page-submenu btn-group"> </div>
            		    <div class="widget">
													
{$main_content|default:'No content supplied'}

                        </div> 
                    </div> 
                </div> 
		    </div> 
		</div> 
	</div> 
	<div class="footer-clean"></div>
				
</div> 

{include file="footer.tpl"}

</body>
</html>