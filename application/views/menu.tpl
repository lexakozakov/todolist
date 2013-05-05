	<div class="subnavbar">
		<div class="subnavbar-inner">
			<div class="container">
				<ul class="mainnav">
    				<li{if $controller eq 'home'} class=" active"{/if}>
						<a href="/">
    						<i class="icon-tasks"></i>
							<span>ToDo</span>
						</a>
				    </li>

    				<li {if $controller eq 'tests'} class=" active"{/if}>
						<a href="/tests/">
    						<i class="icon-cogs"></i>
							<span>Tests</span>
						</a>
				    </li>
				</ul>
			</div> 
		</div> 
	</div>
