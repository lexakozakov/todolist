            <table class="table table-striped table-bordered table-hover task-container">
                <thead{if $hide_add_task eq 1} style="display:none"{/if}>
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
                    {foreach from=$tasks item='task'}
                    <tr task_id="{$task->id}">
                        <td width="10"><input type="checkbox" name="task_status" value="1"{if $task->status eq 'done'} checked{/if}></td>
                        <td class="task_text">{if $task->status eq 'done'}<del>{/if}{$task->task_text|escape:'html'}{if $task->status eq 'done'}</del>{/if}</td>
                        <td width="77">
                    	    <a href="#" title="Sort tasks" class="order-tasks"><i class="icon-sort"></i></a> |
                    	    <a href="#" title="Edit task" class="edit-task"><i class="icon-pencil"></i></a> |
                            <a href="#" title="Delete project" class="delete-task"><i class="icon-trash"></i></a>
                            <input type="text" name="task_text" value="">
                        </td>
                    </tr>
                    {/foreach}
                    
                    <tr class="blank" rel="">
                        <td width="10"><input type="checkbox" name="task_status" value="done"></td>
                        <td class="task_text"></td>
                        <td width="77">
                    	    <a href="#" title="Sort tasks" class="order-tasks"><i class="icon-sort"></i></a> |
                    	    <a href="#" title="Edit task" class="edit-task"><i class="icon-pencil"></i></a> |
                            <a href="#" title="Delete task" class="delete-task"><i class="icon-trash"></i></a>
                            <input type="text" name="task_text" value="">
                        </td>
                    </tr>
                    
                </tbody>
            </table>            
