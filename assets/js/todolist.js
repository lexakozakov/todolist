var fixHelper = function(e, ui) {
	ui.children().each(function() {
		$(this).width($(this).width());
	});
	return ui;
};

!function ($) {
    "use strict"; 


    /* PROJECT CLASS DEFINITION
     * ====================== */

    var Project = function (element, options) 
    {
        this.options = $.extend({}, $.fn.project.defaults, options);
        this.$element = $(element);
        this.init();
    }

    Project.prototype =  {
        
        init: function () {
            
            var this_obj = this;

            this.bind_events();

            $("table.task-container tbody", this.$element).sortable({ 
                handle: 'td:eq(2) a.order-tasks',
                helper: fixHelper,
                containment: "parent",
                stop: function(event, ui) { 
                    this_obj.save_task_order();
                }
            }).disableSelection();
            
        }
        , bind_events: function(){
            
            var this_obj = this;
            var element = this.$element;
            var project_container = $('.project_name', this.$element);
            var task_container = $('.task-container', this.$element);

            // Project Events
            $('div.name', project_container).click(function(e){
                e.preventDefault();
                
                this_obj.edit_project();
            })

            $('input[name=project_name]', project_container).blur(function(e){
                e.preventDefault();

                if ($(this).val())
                {
                	this_obj.save_project();
                }
            })
            
            $('input[name=project_name]', project_container).on('keyup', function(e) {
                
                if (e.which ==  27 || e.keyCode == 27) {
                    e.preventDefault();
                    
                    $(this).hide();
                    project_container.children('h3').show();
                }

                if (e.which ==  13 || e.keyCode == 13) {
                    e.preventDefault();

                    this_obj.save_project();
                }
            })            
            
            $('.delete-project', project_container).click(function(e){
                e.preventDefault();

                this_obj.delete_project();
            })
            
            $('.edit-project', project_container).click(function(e){
                e.preventDefault();

                this_obj.edit_project();
            })
            // End Project Events
            
            
            // Task Events
            $('.add-task', task_container).click(function(e){
                e.preventDefault()
                if ($('input[name=add_task]', task_container).val())
                {
                	this_obj.save_task($('input[name=add_task]', task_container), 'add');
                }else{
                    $('input[name=add_task]', task_container).addClass('error');   
                }
                
            })
            
            $('input[name=add_task]', task_container).on('keyup', function(e) {
                $('input[name=add_task]', task_container).removeClass('error');   

                if (e.which ==  13 || e.keyCode == 13) {
                    e.preventDefault();

                	this_obj.save_task($(this), 'add');
                }
            });      

            $('.edit-task', task_container).click(function(e){
                e.preventDefault();
                
                var input = $(this).closest('td').children('input[name=task_text]').clone(true);
                input.val($(this).closest('td').prev('td.task_text').html())
                     .attr('original_value', $(this).closest('td').prev('td.task_text').html())
                     .show(); 
                
                $(this).closest('td').prev('td.task_text').html(input);
                input.focus();
                
            });          
            
            $('input[name=task_text]', task_container).on('keyup', function(e) {

                if (e.which ==  27 || e.keyCode == 27) {
                    e.preventDefault();
                    
                    $(this).closest('td').html($(this).attr('original_value'));
                    $(this).remove();
                }

                if (e.which ==  13 || e.keyCode == 13) {
                    e.preventDefault();

                    if ($(this).val())
                    {
                    	this_obj.save_task($(this), 'edit');
                    }
                }
            });      

            $('input[name=task_text]', task_container).blur(function(e){
                e.preventDefault();

                var element = this.$element;
                
                if ($(this).val())
                {
                	this_obj.save_task($(this), 'edit');
                }else{
                    
                    $(this).closest('td').html($(this).attr('original_value'));
                    $(this).remove();
                }
            })    
            
            
            $('.delete-task', task_container).click(function(e){
                e.preventDefault();
                
                this_obj.delete_task( $(this).closest('tr').attr('task_id') );
            });   
            
            $('input[name=task_status]', task_container).change(function(e){
                
                this_obj.change_task_status($(this));
            })
                 
            // End Task events
            
            
            
        }
        
        , edit_project: function(){

            var project_container = $('.project_name', this.$element);
            
            $('div.name', project_container).hide();
            project_container.children('input').val($('div.name', project_container).html()).show().focus();
            
        }
        
        , save_project: function() {

            var element = this.$element;
            var project_container = $('.project_name', this.$element);
            var task_container = $('.task-container', this.$element);
            
            if ($('input', project_container).attr('disabled') !== undefined) return false;
            
            
            $.ajax({
                url: "/ajax/project/save/",
                type: "POST",
                data: {project_id: element.attr('project_id'), name: $('input[name=project_name]', project_container).val()},
                dataType: "json",
                beforeSend: function(jqXHR, settings){
                    $('input', project_container).attr('disabled', '');
                },
                success: function(data) {
                
                    if (!element.attr('project_id'))
                    {
                        element.attr('project_id', data.project.id);
                    }
                    
                    $('input', project_container).removeAttr('disabled').hide();
                    $('div.name', project_container).html(data.project.name).show();
                    $('thead', task_container).show();
                }
            });              
            
        }
        
        , delete_project: function(){
            var element = this.$element;

            if (element.attr('project_id'))
            {
                $.ajax({
                    url: "/ajax/project/delete/",
                    type: "POST",
                    data: {project_id: element.attr('project_id')},
                    dataType: "json",
                    beforeSend: function(jqXHR, settings){
                    },
                    success: function(data) {
                        
                        element.fadeOut('slow', function(){});
                    }
                });      
            }else{
                element.fadeOut('slow', function(){
                	element.remove();
                });
            }
        }
        
        , save_task: function(input, action){
            var element = this.$element;
            var task_container = $('.task-container', this.$element);
            
            action = action || 'add';
            
            if (input.attr('disabled') !== undefined) return false;
            
            $.ajax({
                url: "/ajax/task/save/",
                type: "POST",
                data: { project_id: element.attr('project_id'), task_id: action == 'add' ? 0 : input.closest('tr').attr('task_id'), task_text: input.val(), status: 'opened'},
                dataType: "json",
                beforeSend: function(jqXHR, settings){
                    input.attr('disabled', '');
                },
                success: function(data) {
                    input.removeAttr('disabled');
                    
                    if (action == 'add')
                    {
                        var new_task = $('tr.blank', task_container).clone(true);
                        new_task.removeClass('blank');
                        $('td.task_text', new_task).html(data.task.task_text);
                        new_task.attr('task_id', data.task.id)
                                .show()
                                .prependTo($('tbody', task_container));
                    	
                    	input.val('');
                        
                    }else if(action == 'edit'){
                        
                        input.closest('td').html(data.task.task_text);
                        input.remove();
                        
                    }
                }
            });              
        }
        
        , delete_task: function(task_id){
            var task_container = $('.task-container', this.$element);
            
            $.ajax({
                url: "/ajax/task/delete/",
                type: "POST",
                data: {id: task_id},
                dataType: "json",
                beforeSend: function(jqXHR, settings){
                    $('tr[rel='+task_id+']', task_container).attr('disabled', '');
                },
                success: function(data) {
                    
                    if (data.status == 1)
                    {
                        $('tr[task_id='+task_id+']', task_container).fadeOut('slow', function(){
                            $('tr[task_id='+task_id+']', task_container).remove();
                        });
                    }
                    
                }
            });      
        }
        
        , save_task_order: function(){
            var element = this.$element;
            
            var tasks = new Array();
            $('table.task-container tbody tr', element).each(function(index, data){
                if ($(data).attr('task_id')) tasks.push($(data).attr('task_id'));
            });
            
            $.ajax({
                url: "/ajax/project/order/",
                type: "POST",
                data: {tasks: tasks},
                dataType: "json",
                beforeSend: function(jqXHR, settings){
                },
                success: function(data) {
                }
            });             
            
        }
        
        , change_task_status: function(input){

            $.ajax({
                url: "/ajax/task/change-status/",
                type: "POST",
                data: { id: input.closest('tr').attr('task_id'), status: input.is(':checked') ? 'done' : 'opened'},
                dataType: "json",
                beforeSend: function(jqXHR, settings){
                    input.attr('disabled', '');
                },
                success: function(data) {
                    input.removeAttr('disabled');
                    input.closest('tr').children('td.task_text').html((data.task.status == 'done' ? '<del>' : '')+data.task.task_text+(data.task.status == 'done' ? '</del>' : ''));
                    
                }
            });               
        }
        
    }


    /* PROJECT PLUGIN DEFINITION
     * ======================= */

    var old = $.fn.project

    $.fn.project = function (option) 
    {
        return this.each(function () {
            var $this = $(this)
              , data = $this.data('project')
              , options = typeof option == 'object' && option
            if (!data) $this.data('project', (data = new Project(this, options)))
            if (typeof option == 'string') data[option]()
        })
    }

    $.fn.project.Constructor = Project

    $.fn.project.defaults = { }


    /* PROJECT NO CONFLICT
     * ================= */

    $.fn.project.noConflict = function () 
    {
        $.fn.project = old
        return this
    }


    /* PROJECT DATA-API
     * ============== */

     
    $(window).on('load', function () 
    {
        $('.project').each(function () {
            var $project = $(this) 
            var data = $project.data()
            
            data.offset = data.offset || {}
            $project.project(data)
        })
        
        $('.add-project').click(function(e){
            e.preventDefault();
            
            var new_project = $('#project-blank').clone().removeAttr('id').project();
            
            $('div.name', new_project).hide();
            $('input[name=project_name]', new_project).show();
            
            new_project.insertAfter($('div.add-project-block')).fadeIn('slow', function(){
                $('input[name=project_name]', new_project).focus();
            });
            
        })
    })


}(window.jQuery);