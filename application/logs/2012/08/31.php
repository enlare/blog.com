<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-31 03:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-31 03:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-31 03:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-31 03:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-31 04:37:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_Categories' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-31 04:37:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_Categories' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-31 04:37:56 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 77 ]
2012-08-31 04:37:56 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 77 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(77): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 77, Array)
#1 [internal function]: Controller_Admin_Post->action_new()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 07:33:49 --- ERROR: ErrorException [ 8 ]: Undefined index: idPost ~ APPPATH/classes/controller/admin/post.php [ 57 ]
2012-08-31 07:33:49 --- STRACE: ErrorException [ 8 ]: Undefined index: idPost ~ APPPATH/classes/controller/admin/post.php [ 57 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(57): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 57, Array)
#1 [internal function]: Controller_Admin_Post->action_delete()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 08:20:39 --- ERROR: Kohana_Exception [ 0 ]: The date property does not exist in the Model_Posts class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2012-08-31 08:20:39 --- STRACE: Kohana_Exception [ 0 ]: The date property does not exist in the Model_Posts class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('date', 1346419238)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(92): Kohana_ORM->__set('date', 1346419238)
#2 [internal function]: Controller_Admin_Post->action_new()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-31 08:30:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/classes/controller/admin/post.php [ 103 ]
2012-08-31 08:30:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH/classes/controller/admin/post.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-31 09:12:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-31 09:12:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_Category' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-31 09:13:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'id_caegory' in 'where clause' [ SELECT `categories`.* FROM `categories` AS `categories` WHERE `id_caegory` = '1' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-08-31 09:13:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'id_caegory' in 'where clause' [ SELECT `categories`.* FROM `categories` AS `categories` WHERE `id_caegory` = '1' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/travel.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', false, Array)
#1 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(61): Kohana_ORM->find()
#4 [internal function]: Controller_Admin_Post->action_edit()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-31 09:14:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-31 09:14:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-31 09:18:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: allCategories ~ APPPATH/views/scripts/admin/manage/editpost.php [ 14 ]
2012-08-31 09:18:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: allCategories ~ APPPATH/views/scripts/admin/manage/editpost.php [ 14 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/editpost.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 14, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(49): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(55): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Post->action_edit()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-31 09:22:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
2012-08-31 09:22:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/editpost.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 8, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(49): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(86): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Post->action_edit()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-31 09:23:29 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
2012-08-31 09:23:29 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/editpost.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 8, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(49): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(88): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Post->action_edit()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-31 09:23:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
2012-08-31 09:23:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/editpost.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/public...', 8, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(49): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(88): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Post->action_edit()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-31 09:24:28 --- ERROR: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
2012-08-31 09:24:28 --- STRACE: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/editpost.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/public...', 8, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(49): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(88): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Post->action_edit()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-31 09:27:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/post.php [ 80 ]
2012-08-31 09:27:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/post.php [ 80 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(80): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/public...', 80, Array)
#1 [internal function]: Controller_Admin_Post->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 09:29:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/post.php [ 81 ]
2012-08-31 09:29:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/post.php [ 81 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(81): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/public...', 81, Array)
#1 [internal function]: Controller_Admin_Post->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 09:29:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/post.php [ 84 ]
2012-08-31 09:29:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/post.php [ 84 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(84): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/public...', 84, Array)
#1 [internal function]: Controller_Admin_Post->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 09:32:14 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
2012-08-31 09:32:14 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/editpost.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 8, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(49): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(94): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Post->action_edit()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-31 09:36:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 92 ]
2012-08-31 09:36:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 92 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 92, Array)
#1 [internal function]: Controller_Admin_Post->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 09:37:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 94 ]
2012-08-31 09:37:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 94 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 94, Array)
#1 [internal function]: Controller_Admin_Post->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 09:37:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 94 ]
2012-08-31 09:37:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 94 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 94, Array)
#1 [internal function]: Controller_Admin_Post->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 09:39:01 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 52 ]
2012-08-31 09:39:01 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 52 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(52): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 52, Array)
#1 [internal function]: Controller_Admin_Post->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 09:39:29 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 92 ]
2012-08-31 09:39:29 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 92 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(92): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 92, Array)
#1 [internal function]: Controller_Admin_Post->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 09:40:05 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 93 ]
2012-08-31 09:40:05 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 93 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(93): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 93, Array)
#1 [internal function]: Controller_Admin_Post->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 09:40:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 94 ]
2012-08-31 09:40:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 94 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 94, Array)
#1 [internal function]: Controller_Admin_Post->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 09:40:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 94 ]
2012-08-31 09:40:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 94 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 94, Array)
#1 [internal function]: Controller_Admin_Post->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 09:40:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 94 ]
2012-08-31 09:40:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 94 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 94, Array)
#1 [internal function]: Controller_Admin_Post->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 09:40:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 94 ]
2012-08-31 09:40:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/post.php [ 94 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 94, Array)
#1 [internal function]: Controller_Admin_Post->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 09:41:06 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
2012-08-31 09:41:06 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/editpost.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 8, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(49): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(100): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Post->action_edit()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-31 09:41:18 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
2012-08-31 09:41:18 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/scripts/admin/manage/editpost.php [ 8 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/editpost.php(8): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 8, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(49): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(100): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Post->action_edit()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-31 09:51:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/views/scripts/admin/manage/postall.php [ 31 ]
2012-08-31 09:51:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/views/scripts/admin/manage/postall.php [ 31 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/postall.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 31, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(49): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(47): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Post->action_index()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-31 09:52:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: allCategories ~ APPPATH/views/scripts/admin/manage/postall.php [ 37 ]
2012-08-31 09:52:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: allCategories ~ APPPATH/views/scripts/admin/manage/postall.php [ 37 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/postall.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 37, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(49): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(47): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Post->action_index()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-31 09:53:15 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 33 ]
2012-08-31 09:53:15 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 33 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(33): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 33, Array)
#1 [internal function]: Controller_Admin_Post->after()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 13:19:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/category was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-31 13:19:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/category was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-31 13:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-31 13:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-31 13:22:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-31 13:22:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-31 13:22:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/categories. ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-31 13:22:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/categories. ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-31 13:22:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-08-31 13:22:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/categories was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-31 13:23:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: allPost ~ APPPATH/views/scripts/admin/manage/cat.php [ 13 ]
2012-08-31 13:23:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: allPost ~ APPPATH/views/scripts/admin/manage/cat.php [ 13 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/cat.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 13, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(49): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(47): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Category->action_index()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-31 13:23:31 --- ERROR: Kohana_Exception [ 0 ]: The id_post property does not exist in the Model_Categories class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-31 13:23:31 --- STRACE: Kohana_Exception [ 0 ]: The id_post property does not exist in the Model_Categories class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/cat.php(18): Kohana_ORM->__get('id_post')
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(49): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(47): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Category->action_index()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-31 15:13:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/category.php [ 71 ]
2012-08-31 15:13:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/admin/category.php [ 71 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 71, Array)
#1 [internal function]: Controller_Admin_Category->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 15:41:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/admin/category.php [ 61 ]
2012-08-31 15:41:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/admin/category.php [ 61 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 61, Array)
#1 [internal function]: Controller_Admin_Category->action_edit()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 17:46:07 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/category.php [ 33 ]
2012-08-31 17:46:07 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/category.php [ 33 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(33): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 33, Array)
#1 [internal function]: Controller_Admin_Category->after()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-31 18:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-31 18:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-31 18:50:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-31 18:50:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-31 18:51:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-31 18:51:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-31 18:51:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-31 18:51:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-31 18:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-31 18:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-31 18:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-31 18:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-31 18:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-31 18:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-31 18:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-31 18:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-31 18:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-31 18:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-31 18:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-31 18:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-31 18:51:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-08-31 18:51:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-08-31 18:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-08-31 18:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}