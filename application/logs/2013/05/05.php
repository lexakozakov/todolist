<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-05 09:44:14 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Home.php [ 8 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-05 09:44:14 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/lexa/Pro...', 8, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-05 11:58:40 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/cache/smarty_compiled/1d3eed60a25b6608c642d1d9ebf1d3189809d64e.file.home.tpl.php [ 59 ] in /Users/lexa/Projects/todolist/application/cache/smarty_compiled/1d3eed60a25b6608c642d1d9ebf1d3189809d64e.file.home.tpl.php:59
2013-05-05 11:58:40 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/1d3eed60a25b6608c642d1d9ebf1d3189809d64e.file.home.tpl.php(59): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/lexa/Pro...', 59, Array)
#1 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_5184265f83529(Object(Smarty_Internal_Template))
#2 /Users/lexa/Projects/todolist/modules/smarty/classes/Smarty/View.php(376): Smarty_Internal_TemplateBase->fetch('/Users/lexa/Pro...')
#3 /Users/lexa/Projects/todolist/application/classes/Controller/Base.php(31): Smarty_View->render()
#4 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/lexa/Projects/todolist/application/cache/smarty_compiled/1d3eed60a25b6608c642d1d9ebf1d3189809d64e.file.home.tpl.php:59
2013-05-05 11:59:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: tasks ~ APPPATH/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php [ 30 ] in /Users/lexa/Projects/todolist/application/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php:30
2013-05-05 11:59:27 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/lexa/Pro...', 30, Array)
#1 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_51855418a9521(Object(Smarty_Internal_Template))
#2 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_template.php(285): Smarty_Internal_TemplateBase->fetch(NULL, NULL, NULL, NULL, false, false, true)
#3 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/1d3eed60a25b6608c642d1d9ebf1d3189809d64e.file.home.tpl.php(68): Smarty_Internal_Template->getSubTemplate('todo/_tasks_lis...', NULL, NULL, NULL, NULL, Array, 0)
#4 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_5184265f83529(Object(Smarty_Internal_Template))
#5 /Users/lexa/Projects/todolist/modules/smarty/classes/Smarty/View.php(376): Smarty_Internal_TemplateBase->fetch('/Users/lexa/Pro...')
#6 /Users/lexa/Projects/todolist/application/classes/Controller/Base.php(31): Smarty_View->render()
#7 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/lexa/Projects/todolist/application/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php:30
2013-05-05 11:59:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: tasks ~ APPPATH/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php [ 30 ] in /Users/lexa/Projects/todolist/application/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php:30
2013-05-05 11:59:30 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/lexa/Pro...', 30, Array)
#1 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_51855418a9521(Object(Smarty_Internal_Template))
#2 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_template.php(285): Smarty_Internal_TemplateBase->fetch(NULL, NULL, NULL, NULL, false, false, true)
#3 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/1d3eed60a25b6608c642d1d9ebf1d3189809d64e.file.home.tpl.php(68): Smarty_Internal_Template->getSubTemplate('todo/_tasks_lis...', NULL, NULL, NULL, NULL, Array, 0)
#4 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_5184265f83529(Object(Smarty_Internal_Template))
#5 /Users/lexa/Projects/todolist/modules/smarty/classes/Smarty/View.php(376): Smarty_Internal_TemplateBase->fetch('/Users/lexa/Pro...')
#6 /Users/lexa/Projects/todolist/application/classes/Controller/Base.php(31): Smarty_View->render()
#7 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/lexa/Projects/todolist/application/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php:30
2013-05-05 14:42:57 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Task class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php:600
2013-05-05 14:42:57 --- DEBUG: #0 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('name')
#1 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php(45): Kohana_ORM->__get('name')
#2 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_51855418a9521(Object(Smarty_Internal_Template))
#3 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_template.php(285): Smarty_Internal_TemplateBase->fetch(NULL, NULL, NULL, NULL, false, false, true)
#4 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/1d3eed60a25b6608c642d1d9ebf1d3189809d64e.file.home.tpl.php(54): Smarty_Internal_Template->getSubTemplate('todo/_tasks_lis...', NULL, NULL, NULL, NULL, Array, 0)
#5 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_5184265f83529(Object(Smarty_Internal_Template))
#6 /Users/lexa/Projects/todolist/modules/smarty/classes/Smarty/View.php(376): Smarty_Internal_TemplateBase->fetch('/Users/lexa/Pro...')
#7 /Users/lexa/Projects/todolist/application/classes/Controller/Base.php(31): Smarty_View->render()
#8 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php:600
2013-05-05 14:43:41 --- EMERGENCY: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Task class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php:600
2013-05-05 14:43:41 --- DEBUG: #0 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('name')
#1 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php(45): Kohana_ORM->__get('name')
#2 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_51855418a9521(Object(Smarty_Internal_Template))
#3 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_template.php(285): Smarty_Internal_TemplateBase->fetch(NULL, NULL, NULL, NULL, false, false, true)
#4 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/1d3eed60a25b6608c642d1d9ebf1d3189809d64e.file.home.tpl.php(54): Smarty_Internal_Template->getSubTemplate('todo/_tasks_lis...', NULL, NULL, NULL, NULL, Array, 0)
#5 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_5184265f83529(Object(Smarty_Internal_Template))
#6 /Users/lexa/Projects/todolist/modules/smarty/classes/Smarty/View.php(376): Smarty_Internal_TemplateBase->fetch('/Users/lexa/Pro...')
#7 /Users/lexa/Projects/todolist/application/classes/Controller/Base.php(31): Smarty_View->render()
#8 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php:600
2013-05-05 17:30:20 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php [ 45 ] in /Users/lexa/Projects/todolist/application/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php:45
2013-05-05 17:30:20 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php(45): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/lexa/Pro...', 45, Array)
#1 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_51855418a9521(Object(Smarty_Internal_Template))
#2 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_template.php(285): Smarty_Internal_TemplateBase->fetch(NULL, NULL, NULL, NULL, false, false, true)
#3 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/1d3eed60a25b6608c642d1d9ebf1d3189809d64e.file.home.tpl.php(71): Smarty_Internal_Template->getSubTemplate('todo/_tasks_lis...', NULL, NULL, NULL, NULL, Array, 0)
#4 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_5184265f83529(Object(Smarty_Internal_Template))
#5 /Users/lexa/Projects/todolist/modules/smarty/classes/Smarty/View.php(376): Smarty_Internal_TemplateBase->fetch('/Users/lexa/Pro...')
#6 /Users/lexa/Projects/todolist/application/classes/Controller/Base.php(31): Smarty_View->render()
#7 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/lexa/Projects/todolist/application/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php:45
2013-05-05 18:00:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Task::current() ~ APPPATH/classes/Model/Task.php [ 63 ] in :
2013-05-05 18:00:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 18:07:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/classes/Model/Task.php [ 65 ] in :
2013-05-05 18:07:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 18:07:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/classes/Model/Task.php [ 65 ] in :
2013-05-05 18:07:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 18:25:45 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Task as array ~ APPPATH/classes/Controller/Ajax/Task.php [ 23 ] in :
2013-05-05 18:25:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 18:25:51 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Task as array ~ APPPATH/classes/Controller/Ajax/Task.php [ 23 ] in :
2013-05-05 18:25:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-05 20:43:19 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Home.php [ 8 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-05 20:43:19 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/lexa/Pro...', 8, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-05 22:00:18 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Home.php [ 8 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-05 22:00:18 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/lexa/Pro...', 8, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(120): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-05 22:00:38 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Home.php [ 8 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-05 22:00:38 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/lexa/Pro...', 8, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(120): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-05 22:01:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: projects ~ APPPATH/classes/Controller/Home.php [ 15 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:15
2013-05-05 22:01:23 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Home.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/lexa/Pro...', 15, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(120): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:15
2013-05-05 23:49:52 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'userpic_url' doesn't have a default value [ INSERT INTO `users` (`username`, `email`, `network_id`, `name`, `registered_ip`, `password`, `created_at`) VALUES ('facebook_731345526', 'kozakoff@gmail.com', '731345526', 'lexa kozakov', '0', 'f8b055db51753f86fd370fa1bfa9786469e91341c5332b049c25a1aa8643c54f', '2013-05-05 23:49:52') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/lexa/Projects/todolist/modules/database/classes/Kohana/Database/Query.php:251
2013-05-05 23:49:52 --- DEBUG: #0 /Users/lexa/Projects/todolist/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/lexa/Projects/todolist/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#3 /Users/lexa/Projects/todolist/application/classes/Model/User.php(97): Model_Auth_User->create_user(Array, Array)
#4 /Users/lexa/Projects/todolist/modules/facebookauth/classes/Controller/Facebook.php(51): Model_User->create_user_if_not_exist(Array)
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Facebook->action_login_response()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Facebook))
#8 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/lexa/Projects/todolist/index.php(120): Kohana_Request->execute()
#12 {main} in /Users/lexa/Projects/todolist/modules/database/classes/Kohana/Database/Query.php:251