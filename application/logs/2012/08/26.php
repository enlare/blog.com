<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-26 02:38:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin_Manage::$auto_render ~ APPPATH/classes/controller/admin/manage.php [ 16 ]
2012-08-26 02:38:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Admin_Manage::$auto_render ~ APPPATH/classes/controller/admin/manage.php [ 16 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/public...', 16, Array)
#1 [internal function]: Controller_Admin_Manage->before()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 02:38:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Manage::render() ~ APPPATH/classes/controller/admin/manage.php [ 16 ]
2012-08-26 02:38:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Manage::render() ~ APPPATH/classes/controller/admin/manage.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 02:39:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Manage::auto_render() ~ APPPATH/classes/controller/admin/manage.php [ 17 ]
2012-08-26 02:39:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Manage::auto_render() ~ APPPATH/classes/controller/admin/manage.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 02:39:17 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
2012-08-26 02:39:17 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/public...', 19, Array)
#1 [internal function]: Controller_Admin_Manage->before()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 02:39:39 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
2012-08-26 02:39:39 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/public...', 19, Array)
#1 [internal function]: Controller_Admin_Manage->before()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 02:39:40 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
2012-08-26 02:39:40 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/public...', 19, Array)
#1 [internal function]: Controller_Admin_Manage->before()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 02:39:41 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
2012-08-26 02:39:41 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/public...', 19, Array)
#1 [internal function]: Controller_Admin_Manage->before()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 02:39:41 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
2012-08-26 02:39:41 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/public...', 19, Array)
#1 [internal function]: Controller_Admin_Manage->before()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 02:39:42 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
2012-08-26 02:39:42 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/public...', 19, Array)
#1 [internal function]: Controller_Admin_Manage->before()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 02:39:42 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
2012-08-26 02:39:42 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 19 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(19): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/public...', 19, Array)
#1 [internal function]: Controller_Admin_Manage->before()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 02:40:01 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 20 ]
2012-08-26 02:40:01 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 20 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(20): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/public...', 20, Array)
#1 [internal function]: Controller_Admin_Manage->before()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 02:47:06 --- ERROR: ErrorException [ 2 ]: Attempt to modify property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 35 ]
2012-08-26 02:47:06 --- STRACE: ErrorException [ 2 ]: Attempt to modify property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 35 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(35): Kohana_Core::error_handler(2, 'Attempt to modi...', '/var/www/public...', 35, Array)
#1 [internal function]: Controller_Admin_Manage->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 02:48:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 35 ]
2012-08-26 02:48:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 35 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(35): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/public...', 35, Array)
#1 [internal function]: Controller_Admin_Manage->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 02:49:09 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/admin/manage.php [ 35 ]
2012-08-26 02:49:09 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/controller/admin/manage.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 02:49:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin/manage.php [ 35 ]
2012-08-26 02:49:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin/manage.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 02:50:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: template ~ APPPATH/classes/controller/admin/manage.php [ 35 ]
2012-08-26 02:50:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: template ~ APPPATH/classes/controller/admin/manage.php [ 35 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 35, Array)
#1 [internal function]: Controller_Admin_Manage->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 03:00:57 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 37 ]
2012-08-26 03:00:57 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 37 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(37): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/public...', 37, Array)
#1 [internal function]: Controller_Admin_Manage->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 03:01:24 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 17 ]
2012-08-26 03:01:24 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/manage.php [ 17 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(17): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/public...', 17, Array)
#1 [internal function]: Controller_Admin_Manage->before()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 03:08:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 03:08:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 03:17:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 03:17:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 03:17:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 03:17:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 03:17:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 03:17:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 03:19:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: vari ~ APPPATH/views/scripts/admin/manage/index.php [ 2 ]
2012-08-26 03:19:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: vari ~ APPPATH/views/scripts/admin/manage/index.php [ 2 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/index.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 2, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(40): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(41): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_index()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 03:19:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 03:19:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 03:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 03:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 03:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/manage/munu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-26 03:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/manage/munu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 03:58:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-26 03:58:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_Menus' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 03:58:55 --- ERROR: Database_Exception [ 1146 ]: Table 'travel.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-26 03:58:55 --- STRACE: Database_Exception [ 1146 ]: Table 'travel.menus' doesn't exist [ SHOW FULL COLUMNS FROM `menus` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/travel.com/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menus')
#2 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(46): Kohana_ORM::factory('menus')
#7 [internal function]: Controller_Admin_Manage->action_menu()
#8 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#9 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#12 {main}
2012-08-26 04:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 04:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 04:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 04:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 04:09:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 04:09:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 04:09:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 04:09:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 04:09:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 04:09:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 04:16:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 04:16:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 04:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 04:16:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 04:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 04:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 04:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 04:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/styleAdmin.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 04:57:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 04:57:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 04:57:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 04:57:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 05:54:28 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Menus as array ~ APPPATH/views/scripts/admin/manage/menu.php [ 10 ]
2012-08-26 05:54:28 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Menus as array ~ APPPATH/views/scripts/admin/manage/menu.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 05:58:01 --- ERROR: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
2012-08-26 05:58:01 --- STRACE: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 15, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(67): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 05:58:03 --- ERROR: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
2012-08-26 05:58:03 --- STRACE: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 15, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(67): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 05:58:04 --- ERROR: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
2012-08-26 05:58:04 --- STRACE: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 15, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(67): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 05:58:04 --- ERROR: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
2012-08-26 05:58:04 --- STRACE: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 15, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(67): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 05:58:04 --- ERROR: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
2012-08-26 05:58:04 --- STRACE: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 15, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(67): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 05:58:10 --- ERROR: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
2012-08-26 05:58:10 --- STRACE: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 15, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(67): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 05:58:10 --- ERROR: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
2012-08-26 05:58:10 --- STRACE: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 15, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(67): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 05:58:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
2012-08-26 05:58:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(15): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/public...', 15, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(67): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 05:59:40 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
2012-08-26 05:59:40 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(15): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/public...', 15, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(67): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 06:01:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
2012-08-26 06:01:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/views/scripts/admin/manage/menu.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 06:06:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 7 ]
2012-08-26 06:06:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 7 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/public...', 7, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(67): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 06:06:41 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/kohana/database/mysql/result.php [ 33 ]
2012-08-26 06:06:41 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/kohana/database/mysql/result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/var/www/public...', 33, Array)
#1 /var/www/public_html/travel.com/modules/database/classes/kohana/database/mysql/result.php(33): mysql_data_seek(Resource id #92, 'title_main')
#2 /var/www/public_html/travel.com/modules/database/classes/kohana/database/result.php(236): Kohana_Database_MySQL_Result->seek('title_main')
#3 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(7): Kohana_Database_Result->offsetGet('title_main')
#4 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#8 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#9 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#10 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#11 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#12 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(67): Kohana_Response->body(Object(View))
#13 [internal function]: Controller_Admin_Manage->action_menu()
#14 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#15 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#18 {main}
2012-08-26 06:13:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin/manage.php [ 61 ]
2012-08-26 06:13:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/admin/manage.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 06:14:03 --- ERROR: ErrorException [ 8 ]: Undefined index: submenu ~ APPPATH/views/scripts/admin/manage/menu.php [ 7 ]
2012-08-26 06:14:03 --- STRACE: ErrorException [ 8 ]: Undefined index: submenu ~ APPPATH/views/scripts/admin/manage/menu.php [ 7 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 7, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(66): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 06:18:53 --- ERROR: ErrorException [ 8 ]: Undefined index: submenu ~ APPPATH/views/scripts/admin/manage/menu.php [ 7 ]
2012-08-26 06:18:53 --- STRACE: ErrorException [ 8 ]: Undefined index: submenu ~ APPPATH/views/scripts/admin/manage/menu.php [ 7 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 7, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(66): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 06:19:49 --- ERROR: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 7 ]
2012-08-26 06:19:49 --- STRACE: ErrorException [ 8 ]: Undefined index: title_main ~ APPPATH/views/scripts/admin/manage/menu.php [ 7 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 7, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(66): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 06:20:20 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/scripts/admin/manage/menu.php [ 7 ]
2012-08-26 06:20:20 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/scripts/admin/manage/menu.php [ 7 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/public...', 7, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(43): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/manage.php(66): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Manage->action_menu()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Manage))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-26 06:31:54 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/scripts/admin/manage/menu.php [ 29 ]
2012-08-26 06:31:54 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/scripts/admin/manage/menu.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 06:33:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/scripts/admin/manage/menu.php [ 27 ]
2012-08-26 06:33:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/scripts/admin/manage/menu.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 06:33:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/scripts/admin/manage/menu.php [ 27 ]
2012-08-26 06:33:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/scripts/admin/manage/menu.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 06:34:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/scripts/admin/manage/menu.php [ 20 ]
2012-08-26 06:34:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/scripts/admin/manage/menu.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 06:34:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/scripts/admin/manage/menu.php [ 20 ]
2012-08-26 06:34:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/scripts/admin/manage/menu.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 06:38:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/scripts/admin/manage/menu.php [ 27 ]
2012-08-26 06:38:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/scripts/admin/manage/menu.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 06:42:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin/manage.php [ 60 ]
2012-08-26 06:42:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/admin/manage.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 06:42:31 --- ERROR: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/controller/admin/manage.php [ 61 ]
2012-08-26 06:42:31 --- STRACE: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/controller/admin/manage.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 06:42:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::pk() ~ APPPATH/classes/controller/admin/manage.php [ 60 ]
2012-08-26 06:42:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::pk() ~ APPPATH/classes/controller/admin/manage.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 06:43:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::pk() ~ APPPATH/classes/controller/admin/manage.php [ 60 ]
2012-08-26 06:43:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::pk() ~ APPPATH/classes/controller/admin/manage.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 12:19:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/controller/admin/post.php [ 40 ]
2012-08-26 12:19:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/controller/admin/post.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 12:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-26 12:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 12:41:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/post/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-26 12:41:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/post/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor/contents.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor/contents.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 12:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor/contents.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 12:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor/contents.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 12:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor/contents.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 12:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ckeditor/contents.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 13:51:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_Post' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-26 13:51:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_Post' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 14:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-26 14:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 14:10:44 --- ERROR: ErrorException [ 1 ]: Call to undefined function where() ~ APPPATH/classes/controller/admin/post.php [ 49 ]
2012-08-26 14:10:44 --- STRACE: ErrorException [ 1 ]: Call to undefined function where() ~ APPPATH/classes/controller/admin/post.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 14:21:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/admin/post.php [ 12 ]
2012-08-26 14:21:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH/classes/controller/admin/post.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 14:21:12 --- ERROR: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-08-26 14:21:12 --- STRACE: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/view.php(137): Kohana_View->set_filename('')
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(30): Kohana_View->__construct('', NULL)
#2 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(33): Kohana_View::factory('')
#3 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(11): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Admin_Post->before()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-26 14:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 14:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 14:59:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 14:59:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:11:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:11:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:11:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:11:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:13:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin/ckupload.php [ 30 ]
2012-08-26 15:13:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin/ckupload.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 15:13:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin/ckupload.php [ 30 ]
2012-08-26 15:13:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin/ckupload.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 15:13:35 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 30 ]
2012-08-26 15:13:35 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 30 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 30, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 15:14:48 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 31 ]
2012-08-26 15:14:48 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 31 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 31, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 15:14:59 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 31 ]
2012-08-26 15:14:59 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 31 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 31, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 15:15:37 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 35 ]
2012-08-26 15:15:37 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 35 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(35): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 35, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 15:19:46 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(/upload/1315761806_baikal.jpg): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin/ckupload.php [ 41 ]
2012-08-26 15:19:46 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(/upload/1315761806_baikal.jpg): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin/ckupload.php [ 41 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/var/www/public...', 41, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(41): move_uploaded_file('/tmp/phpm30hHy', '/upload/1315761...')
#2 [internal function]: Controller_Admin_Ckupload->action_index()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-26 15:21:02 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(/upload/1315761806_baikal.jpg): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin/ckupload.php [ 41 ]
2012-08-26 15:21:02 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(/upload/1315761806_baikal.jpg): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin/ckupload.php [ 41 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/var/www/public...', 41, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(41): move_uploaded_file('/tmp/phpdHRihd', '/upload/1315761...')
#2 [internal function]: Controller_Admin_Ckupload->action_index()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-26 15:22:32 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 30 ]
2012-08-26 15:22:32 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 30 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 30, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 15:22:58 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 30 ]
2012-08-26 15:22:58 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 30 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 30, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 15:23:12 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 36 ]
2012-08-26 15:23:12 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 36 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 36, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 15:23:25 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 36 ]
2012-08-26 15:23:25 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 36 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 36, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 15:29:26 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 36 ]
2012-08-26 15:29:26 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 36 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 36, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 15:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/ckupload.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:30:43 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(/upload/1315761806_baikal.jpg): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin/ckupload.php [ 42 ]
2012-08-26 15:30:43 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(/upload/1315761806_baikal.jpg): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin/ckupload.php [ 42 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/var/www/public...', 42, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(42): move_uploaded_file('/tmp/phphbzLn1', '/upload/1315761...')
#2 [internal function]: Controller_Admin_Ckupload->action_index()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-26 15:31:14 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 36 ]
2012-08-26 15:31:14 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 36 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 36, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 15:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/post/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/post/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/post/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/post/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/post/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/post/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:49:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/post/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:49:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/post/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/post/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/post/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:50:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/post/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:50:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/post/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 15:55:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 15:55:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 16:04:18 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(uploads/1315761904_rrrryerr2.jpg): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin/ckupload.php [ 42 ]
2012-08-26 16:04:18 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(uploads/1315761904_rrrryerr2.jpg): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin/ckupload.php [ 42 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/var/www/public...', 42, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(42): move_uploaded_file('/tmp/phpetVQsY', 'uploads/1315761...')
#2 [internal function]: Controller_Admin_Ckupload->action_index()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-26 16:10:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin/ckupload.php [ 45 ]
2012-08-26 16:10:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/admin/ckupload.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 16:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 16:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 16:11:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 16:11:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 16:11:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 16:11:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 16:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 16:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 16:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 16:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 16:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 16:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/var/www/public_html/travel.com/upload/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 16:38:30 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 36 ]
2012-08-26 16:38:30 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 36 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 36, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 18:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:32:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:32:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:45:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/config/general.php [ 13 ]
2012-08-26 18:45:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/config/general.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 18:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:47:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:47:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:48:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:48:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:57:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:57:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:57:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:57:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:58:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:58:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 18:59:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 18:59:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 19:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 19:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 19:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 19:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 19:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 19:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 19:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/index/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 19:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/index/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 19:00:44 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:00:44 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/uploads/')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/uploads/')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(27): Kohana_Image::factory('/uploads/', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:01:07 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:01:07 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/uploads/')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/uploads/')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(26): Kohana_Image::factory('/uploads/', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:01:45 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/public_html/travel.com/application/classes/controller/image.php on line 15 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2012-08-26 19:01:45 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/public_html/travel.com/application/classes/controller/image.php on line 15 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/public...', 43, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/image.php(15): Kohana_Controller->__construct()
#2 [internal function]: Controller_Image->__construct(Object(Request), Object(Response))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-26 19:02:00 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/public_html/travel.com/application/classes/controller/image.php on line 15 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2012-08-26 19:02:00 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /var/www/public_html/travel.com/application/classes/controller/image.php on line 15 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/public...', 43, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/image.php(15): Kohana_Controller->__construct()
#2 [internal function]: Controller_Image->__construct(Object(Request), Object(Response))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-26 19:02:05 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:02:05 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/uploads/')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/uploads/')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(27): Kohana_Image::factory('/uploads/', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:02:26 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:02:26 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/uploads/')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/uploads/')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/uploads/', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:02:39 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:02:39 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/uploads/')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/uploads/')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/uploads/', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:03:09 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:03:09 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/uploads/')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/uploads/')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/uploads/', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:03:10 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:03:10 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/uploads/')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/uploads/')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/uploads/', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:03:11 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:03:11 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/uploads/')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/uploads/')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/uploads/', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:03:11 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:03:11 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/uploads/')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/uploads/')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/uploads/', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/index/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 19:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/index/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 19:03:51 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:03:51 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/uploads/')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/uploads/')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/uploads/', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:03:55 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:03:55 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/uploads/')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/uploads/')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/uploads/', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:04:02 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:04:02 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/uploads/')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/uploads/')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/uploads/', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:04:29 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:04:29 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/uploads/131576...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/uploads/131576...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/uploads/131576...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:05:03 --- ERROR: ErrorException [ 1 ]: Class 'Image_ImageMagick' not found ~ MODPATH/image/classes/kohana/image.php [ 53 ]
2012-08-26 19:05:03 --- STRACE: ErrorException [ 1 ]: Class 'Image_ImageMagick' not found ~ MODPATH/image/classes/kohana/image.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-26 19:05:42 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:05:42 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('../uploads/1315...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('../uploads/1315...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('../uploads/1315...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:06:10 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:06:10 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:06:12 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:06:12 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:06:13 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:06:13 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:06:13 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:06:13 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:06:14 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:06:14 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:06:14 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:06:14 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:06:15 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:06:15 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:06:15 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:06:15 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:06:15 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:06:15 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:06:16 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:06:16 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:06:17 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:06:17 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:06:17 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:06:17 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:07:21 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:07:21 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:07:24 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:07:24 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:07:26 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:07:26 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:07:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 19:07:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 19:07:42 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:07:42 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:07:43 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:07:43 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:07:43 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:07:43 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:07:46 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:07:46 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:07:46 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:07:46 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:07:51 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:07:51 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:07:54 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:07:54 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:07:55 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:07:55 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:07:57 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:07:57 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:08:01 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:08:01 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:10:43 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:10:43 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:10:44 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:10:44 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:10:59 --- ERROR: ErrorException [ 8 ]: Undefined index: filename ~ APPPATH/classes/controller/admin/ckupload.php [ 53 ]
2012-08-26 19:10:59 --- STRACE: ErrorException [ 8 ]: Undefined index: filename ~ APPPATH/classes/controller/admin/ckupload.php [ 53 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(53): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 53, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 19:11:50 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(http://travel.com/upload/1315761904_rrrryerr2.jpg): failed to open stream: HTTP wrapper does not support writeable connections ~ APPPATH/classes/controller/admin/ckupload.php [ 53 ]
2012-08-26 19:11:50 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(http://travel.com/upload/1315761904_rrrryerr2.jpg): failed to open stream: HTTP wrapper does not support writeable connections ~ APPPATH/classes/controller/admin/ckupload.php [ 53 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/var/www/public...', 53, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(53): move_uploaded_file('/tmp/phpBII23T', 'http://travel.c...')
#2 [internal function]: Controller_Admin_Ckupload->action_index()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-26 19:18:33 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(/upload/1315761904_rrrryerr2.jpg): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin/ckupload.php [ 53 ]
2012-08-26 19:18:33 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(/upload/1315761904_rrrryerr2.jpg): failed to open stream: No such file or directory ~ APPPATH/classes/controller/admin/ckupload.php [ 53 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', '/var/www/public...', 53, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(53): move_uploaded_file('/tmp/phpSmZ0Tr', '/upload/1315761...')
#2 [internal function]: Controller_Admin_Ckupload->action_index()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-26 19:19:53 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 44 ]
2012-08-26 19:19:53 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 44 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 44, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 19:21:14 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 44 ]
2012-08-26 19:21:14 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/ckupload.php [ 44 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/ckupload.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 44, Array)
#1 [internal function]: Controller_Admin_Ckupload->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Ckupload))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 19:21:23 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:21:23 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 19:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 19:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 19:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 19:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-26 19:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/1315761904_rrrryerr2.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-26 19:22:31 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:22:31 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:22:58 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:22:58 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:22:58 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:22:58 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:23:10 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:23:10 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 19:23:31 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-08-26 19:23:31 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/upload/1315761...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/upload/1315761...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(28): Kohana_Image::factory('/upload/1315761...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-26 20:15:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-26 20:15:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 20:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ckeditor/adminScript.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-26 20:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ckeditor/adminScript.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 20:20:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ckeditor/adminScript.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-26 20:20:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ckeditor/adminScript.js was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 20:31:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL post/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-26 20:31:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL post/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 20:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL post/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-26 20:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL post/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 20:33:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL post/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-26 20:33:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL post/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 20:34:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/post/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-26 20:34:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/post/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 20:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-26 20:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 20:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/post/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-26 20:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/post/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-26 21:17:07 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/galery.php [ 44 ]
2012-08-26 21:17:07 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/galery.php [ 44 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/galery.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 44, Array)
#1 [internal function]: Controller_Admin_Galery->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Galery))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 21:17:42 --- ERROR: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/galery.php [ 44 ]
2012-08-26 21:17:42 --- STRACE: ErrorException [ 8 ]: Undefined index: upload ~ APPPATH/classes/controller/admin/galery.php [ 44 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/galery.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 44, Array)
#1 [internal function]: Controller_Admin_Galery->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Galery))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 21:18:08 --- ERROR: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/admin/galery.php [ 44 ]
2012-08-26 21:18:08 --- STRACE: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/admin/galery.php [ 44 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/galery.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 44, Array)
#1 [internal function]: Controller_Admin_Galery->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Galery))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 21:18:44 --- ERROR: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/admin/galery.php [ 44 ]
2012-08-26 21:18:44 --- STRACE: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/admin/galery.php [ 44 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/galery.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 44, Array)
#1 [internal function]: Controller_Admin_Galery->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Galery))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 21:19:01 --- ERROR: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/admin/galery.php [ 44 ]
2012-08-26 21:19:01 --- STRACE: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/admin/galery.php [ 44 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/galery.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 44, Array)
#1 [internal function]: Controller_Admin_Galery->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Galery))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-26 21:20:38 --- ERROR: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/admin/galery.php [ 44 ]
2012-08-26 21:20:38 --- STRACE: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/controller/admin/galery.php [ 44 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/galery.php(44): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 44, Array)
#1 [internal function]: Controller_Admin_Galery->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Galery))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}