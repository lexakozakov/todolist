<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-04 00:02:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_VARIABLE ~ APPPATH/classes/Controller/Base.php [ 15 ] in :
2013-05-04 00:02:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 00:02:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Home::$admin ~ APPPATH/classes/Controller/Base.php [ 12 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Base.php:12
2013-05-04 00:02:35 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Base.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/lexa/Pro...', 12, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Base.php:12
2013-05-04 00:02:40 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Base.php [ 18 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Base.php:18
2013-05-04 00:02:40 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Base.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/lexa/Pro...', 18, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Base.php:18
2013-05-04 00:03:23 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Base.php [ 18 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Base.php:18
2013-05-04 00:03:23 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Base.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Users/lexa/Pro...', 18, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Base.php:18
2013-05-04 10:19:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'FacebookAuth' not found ~ APPPATH/classes/Controller/Base.php [ 18 ] in :
2013-05-04 10:19:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 10:19:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/config/facebook.php [ 41 ] in :
2013-05-04 10:19:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 10:25:24 --- EMERGENCY: Kohana_Exception [ 0 ]: The password property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php:699
2013-05-04 10:25:24 --- DEBUG: #0 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('password', 'kozakoff@gmail....')
#1 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(801): Kohana_ORM->__set('password', 'kozakoff@gmail....')
#2 /Users/lexa/Projects/todolist/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#3 /Users/lexa/Projects/todolist/application/classes/Model/User.php(101): Model_Auth_User->create_user(Array, Array)
#4 /Users/lexa/Projects/todolist/modules/facebookauth/classes/Controller/Facebook.php(51): Model_User->create_user_if_not_exist(Array)
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Facebook->action_login_response()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Facebook))
#8 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php:699
2013-05-04 10:26:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The password property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php:699
2013-05-04 10:26:00 --- DEBUG: #0 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('password', 'kozakoff@gmail....')
#1 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(801): Kohana_ORM->__set('password', 'kozakoff@gmail....')
#2 /Users/lexa/Projects/todolist/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#3 /Users/lexa/Projects/todolist/application/classes/Model/User.php(101): Model_Auth_User->create_user(Array, Array)
#4 /Users/lexa/Projects/todolist/modules/facebookauth/classes/Controller/Facebook.php(51): Model_User->create_user_if_not_exist(Array)
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Facebook->action_login_response()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Facebook))
#8 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php:699
2013-05-04 10:26:13 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in :
2013-05-04 10:26:13 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('kozakoff@gmail....')
#1 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(1207): call_user_func_array(Array, Array)
#2 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(729): Kohana_ORM->run_filter('password', 'kozakoff@gmail....')
#3 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('password', 'kozakoff@gmail....')
#4 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(801): Kohana_ORM->__set('password', 'kozakoff@gmail....')
#5 /Users/lexa/Projects/todolist/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#6 /Users/lexa/Projects/todolist/application/classes/Model/User.php(101): Model_Auth_User->create_user(Array, Array)
#7 /Users/lexa/Projects/todolist/modules/facebookauth/classes/Controller/Facebook.php(51): Model_User->create_user_if_not_exist(Array)
#8 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Facebook->action_login_response()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Facebook))
#11 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#15 {main} in :
2013-05-04 10:34:10 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in :
2013-05-04 10:34:10 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('kozakoff@gmail....')
#1 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(1207): call_user_func_array(Array, Array)
#2 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(729): Kohana_ORM->run_filter('password', 'kozakoff@gmail....')
#3 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('password', 'kozakoff@gmail....')
#4 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(801): Kohana_ORM->__set('password', 'kozakoff@gmail....')
#5 /Users/lexa/Projects/todolist/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#6 /Users/lexa/Projects/todolist/application/classes/Model/User.php(100): Model_Auth_User->create_user(Array, Array)
#7 /Users/lexa/Projects/todolist/modules/facebookauth/classes/Controller/Facebook.php(51): Model_User->create_user_if_not_exist(Array)
#8 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Facebook->action_login_response()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Facebook))
#11 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#15 {main} in :
2013-05-04 10:34:20 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in :
2013-05-04 10:34:20 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('kozakoff@gmail....')
#1 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(1207): call_user_func_array(Array, Array)
#2 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(729): Kohana_ORM->run_filter('password', 'kozakoff@gmail....')
#3 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('password', 'kozakoff@gmail....')
#4 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(801): Kohana_ORM->__set('password', 'kozakoff@gmail....')
#5 /Users/lexa/Projects/todolist/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#6 /Users/lexa/Projects/todolist/application/classes/Model/User.php(100): Model_Auth_User->create_user(Array, Array)
#7 /Users/lexa/Projects/todolist/modules/facebookauth/classes/Controller/Facebook.php(51): Model_User->create_user_if_not_exist(Array)
#8 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Facebook->action_login_response()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Facebook))
#11 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#15 {main} in :
2013-05-04 10:35:37 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in :
2013-05-04 10:35:37 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('kozakoff@gmail....')
#1 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(1207): call_user_func_array(Array, Array)
#2 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(729): Kohana_ORM->run_filter('password', 'kozakoff@gmail....')
#3 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('password', 'kozakoff@gmail....')
#4 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(801): Kohana_ORM->__set('password', 'kozakoff@gmail....')
#5 /Users/lexa/Projects/todolist/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#6 /Users/lexa/Projects/todolist/application/classes/Model/User.php(97): Model_Auth_User->create_user(Array, Array)
#7 /Users/lexa/Projects/todolist/modules/facebookauth/classes/Controller/Facebook.php(51): Model_User->create_user_if_not_exist(Array)
#8 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Facebook->action_login_response()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Facebook))
#11 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#15 {main} in :
2013-05-04 10:50:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/classes/Controller/Ajax/Project.php [ 12 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Ajax/Project.php:12
2013-05-04 10:50:57 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Ajax/Project.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/lexa/Pro...', 12, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Ajax_Project->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Project))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Ajax/Project.php:12
2013-05-04 10:51:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/classes/Controller/Ajax/Project.php [ 11 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Ajax/Project.php:11
2013-05-04 10:51:11 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Ajax/Project.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/lexa/Pro...', 11, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Ajax_Project->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Project))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Ajax/Project.php:11
2013-05-04 13:00:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/classes/Model/Project.php [ 47 ] in :
2013-05-04 13:00:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 13:00:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Model/Project.php [ 49 ] in :
2013-05-04 13:00:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 13:00:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Model/Project.php [ 82 ] in :
2013-05-04 13:00:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 13:01:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Exception::getError() ~ APPPATH/classes/Controller/Ajax/Project.php [ 16 ] in :
2013-05-04 13:01:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 13:08:40 --- EMERGENCY: ErrorException [ 1 ]: Wrong parameters for Exception([string $exception [, long $code [, Exception $previous = NULL]]]) ~ APPPATH/classes/Model/Project.php [ 54 ] in :
2013-05-04 13:08:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 13:14:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/Ajax/Project.php [ 42 ] in :
2013-05-04 13:14:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 13:14:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: project ~ APPPATH/classes/Controller/Ajax/Project.php [ 42 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Ajax/Project.php:42
2013-05-04 13:14:39 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Ajax/Project.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/lexa/Pro...', 42, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Ajax_Project->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Project))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Ajax/Project.php:42
2013-05-04 13:22:10 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH/classes/Model/Project.php [ 43 ] in :
2013-05-04 13:22:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-04 13:22:24 --- EMERGENCY: Exception [ 0 ]: No user found. ~ APPPATH/classes/Model/Project.php [ 43 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Ajax/Project.php:50
2013-05-04 13:22:24 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Ajax/Project.php(50): Model_Project->set_user(Object(Model_User))
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Ajax_Project->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax_Project))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Ajax/Project.php:50
2013-05-04 15:06:58 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Home.php [ 8 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-04 15:06:58 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/lexa/Pro...', 8, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-04 16:09:36 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Home.php [ 8 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-04 16:09:36 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/lexa/Pro...', 8, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-04 18:08:18 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Home.php [ 8 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-04 18:08:18 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/lexa/Pro...', 8, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-04 20:51:43 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Home.php [ 8 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-04 20:51:43 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/lexa/Pro...', 8, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-04 21:31:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The tasks property does not exist in the Model_Project class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php:600
2013-05-04 21:31:26 --- DEBUG: #0 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('tasks')
#1 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/1d3eed60a25b6608c642d1d9ebf1d3189809d64e.file.home.tpl.php(40): Kohana_ORM->__get('tasks')
#2 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_5184265f83529(Object(Smarty_Internal_Template))
#3 /Users/lexa/Projects/todolist/modules/smarty/classes/Smarty/View.php(376): Smarty_Internal_TemplateBase->fetch('/Users/lexa/Pro...')
#4 /Users/lexa/Projects/todolist/application/classes/Controller/Base.php(31): Smarty_View->render()
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php:600
2013-05-04 21:31:41 --- EMERGENCY: SmartyException [ 0 ]: Unable to load template file '_tasks_list.tpl' in '/Users/lexa/Projects/todolist/application/views/todo/home.tpl' ~ MODPATH/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php [ 127 ] in /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_template.php:285
2013-05-04 21:31:41 --- DEBUG: #0 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_template.php(285): Smarty_Internal_TemplateBase->fetch(NULL, NULL, NULL, NULL, false, false, true)
#1 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/1d3eed60a25b6608c642d1d9ebf1d3189809d64e.file.home.tpl.php(40): Smarty_Internal_Template->getSubTemplate('_tasks_list.tpl', NULL, NULL, NULL, NULL, Array, 0)
#2 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_5184265f83529(Object(Smarty_Internal_Template))
#3 /Users/lexa/Projects/todolist/modules/smarty/classes/Smarty/View.php(376): Smarty_Internal_TemplateBase->fetch('/Users/lexa/Pro...')
#4 /Users/lexa/Projects/todolist/application/classes/Controller/Base.php(31): Smarty_View->render()
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(87): Controller_Base->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_template.php:285
2013-05-04 21:33:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The create_at property does not exist in the Model_Task class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php:600
2013-05-04 21:33:02 --- DEBUG: #0 /Users/lexa/Projects/todolist/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('create_at')
#1 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/23968d1e7bc84835e63d6009c3b90896bdbb433d.file._tasks_list.tpl.php(39): Kohana_ORM->__get('create_at')
#2 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_templatebase.php(176): content_51855418a9521(Object(Smarty_Internal_Template))
#3 /Users/lexa/Projects/todolist/modules/smarty/vendor/smarty/libs/sysplugins/smarty_internal_template.php(285): Smarty_Internal_TemplateBase->fetch(NULL, NULL, NULL, NULL, false, false, true)
#4 /Users/lexa/Projects/todolist/application/cache/smarty_compiled/1d3eed60a25b6608c642d1d9ebf1d3189809d64e.file.home.tpl.php(41): Smarty_Internal_Template->getSubTemplate('todo/_tasks_lis...', NULL, NULL, NULL, NULL, Array, 0)
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
2013-05-04 22:49:22 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Home.php [ 8 ] in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8
2013-05-04 22:49:22 --- DEBUG: #0 /Users/lexa/Projects/todolist/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/lexa/Pro...', 8, Array)
#1 /Users/lexa/Projects/todolist/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/lexa/Projects/todolist/application/classes/Request/Client/Internal.php(27): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/lexa/Projects/todolist/system/classes/Kohana/Request/Client.php(114): Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/lexa/Projects/todolist/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/lexa/Projects/todolist/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/lexa/Projects/todolist/application/classes/Controller/Home.php:8