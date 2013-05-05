<div class="container">
    <div class="row">
        <h1>SQL Tasks</h1>
        
        <h4>1. Get all statuses, not repeating, alphabetically ordered</h4>
        The first option: (Field 'status' is ENUM)<br/>
        <pre>
SELECT DISTINCT status, LEFT(status, 1) AS letter
FROM tasks
ORDER BY letter;
        </pre>       
        
        The second option: (Field 'status' is ENUM) 
        <pre>
SELECT DISTINCT status
FROM tasks 
ORDER BY CASE status
    WHEN 'done' THEN 1
    WHEN 'opened' THEN 2
    ELSE 2
    END;     
        </pre>       
         
        <br/> 
        <h4>2. Get the count of all tasks in each project, order by tasks count descending</h4>
        <pre>
SELECT p.id, p.name, COUNT(t.id) AS tasks_count
FROM projects p
	LEFT JOIN tasks t ON t.project_id = p.id
GROUP BY p.id
ORDER BY tasks_count DESC
        </pre>

        <br/> 
        <h4>3. Get the count of all tasks in each project, order by projects names</h4>
        <pre>
SELECT p.id, p.name, COUNT(t.id) AS tasks_count
FROM projects p
	LEFT JOIN tasks t ON t.project_id = p.id
GROUP BY p.id
ORDER BY p.name
        </pre>


        <br/> 
        <h4>4. Get the tasks for all projects having the name beginning with “N” letter</h4>
        <pre>
SELECT t.*
FROM tasks t
	LEFT JOIN projects p ON p.id = t.project_id
WHERE LEFT(p.name, 1) = 'N'
        </pre>

        <br/> 
        <h4>5. Get the list of all projects containing the ‘a’ letter in the middle of the name, and show the tasks count near each project. Mention that there can exist projects without tasks and tasks with project_id=NULL</h4>
        <pre>
        </pre>

        <br/> 
        <h4>6. Get the list of tasks with duplicate names. Order alphabetically.</h4>
        <pre>
SELECT t.* 
FROM tasks t
INNER JOIN (
	SELECT task_text 
	FROM tasks
	GROUP BY task_text 
	HAVING count(id) > 1) dup 
ON t.task_text = dup.task_text
ORDER BY task_text;        
        </pre>

        <br/> 
        <h4>7. Get the list of tasks having several exact matches of both name and status, from the project ‘Garage’. Order by matches count</h4>
        <pre>
        </pre>

        <br/> 
        <h4>8. Get the list of project names having more than 10 tasks in status ‘done’. Order by project_id.</h4>
        <pre>
SELECT p.id, p.name, COUNT(t.id) AS count_tasks
FROM tasks t
	LEFT JOIN projects p ON p.id = t.project_id
WHERE status = 'done'
GROUP BY p.id
HAVING count_tasks >= 10
ORDER BY p.id
        </pre>
                
    </div>
</div>