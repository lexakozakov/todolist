    <div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				
				<a class="brand" href="/">{$page_main_title|default: 'ToDo List'}</a>		
				
				
				<div class="nav-collapse">
    				
    				{if not $user}
        				<a href="/facebook/login" class="nav pull-right" style="font-size: 24px; margin-top: 5px; text-decoration: none;">
        					<i class="icon-facebook"></i>
        				</a>		
    				{else}
    				    <div class="nav pull-right" style="color: #fff">
        				    <img src="{$user->userpic_url}" class="img-rounded" style="width:50px; height: 50px;">
        				    {$user->name} 
        				    ( <a href="/home/logout/">Logout</a> )
    				    </div>
    				{/if}

					
				</div>
			</div> 
		</div> 
	</div> 
