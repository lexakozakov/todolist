{if $user}
<div class="container projects-container">
    <div class="row" >

        <div class="add-project-block" >
            <button class="btn btn-large add-project" type="button">Add Project</button>
        </div>

        
        {foreach from=$projects item='project'}
        
        <div class="project" project_id="{$project->id}">
            <div class="project_name">
            	<div class="project-icon"><i class="icon-calendar"></i></div>
            	
            	<div class="name">{$project->name|escape:'html'}</div>
                <input type="text" name="project_name" placeholder="Enter project name" value="" maxlength="255">
            	
                <div class="pull-right edit-block">
                    <a href="#" title="Edit project" class="edit-project"><i class="icon-pencil"></i></a> |
                    <a href="#" title="Delete project" class="delete-project"><i class="icon-trash"></i></a>
                </div>
                
            </div>
            
            <div class="clearfix"></div>
            
            {include file="todo/_tasks_list.tpl" tasks=$project->task->order_by('order_num')->find_all() hide_add_task=0}
        </div>
        {/foreach}
        
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
            
            {include file="todo/_tasks_list.tpl" tasks=array() hide_add_task=1}
        </div>        

        
    </div>
</div>
{else}
    <p>Please <a href="/facebook/login" title="login via facebook">login via facebook</a>, before start to use todo list.</p>
{/if}