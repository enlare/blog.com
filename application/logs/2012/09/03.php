<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-03 01:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 01:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 01:39:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-03 01:39:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-03 01:53:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'id_cetegory' in 'order clause' [ SELECT `categories`.* FROM `categories` AS `categories` ORDER BY `id_cetegory` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-03 01:53:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'id_cetegory' in 'order clause' [ SELECT `categories`.* FROM `categories` AS `categories` ORDER BY `id_cetegory` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/travel.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_Categorie...', Array)
#1 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(43): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Category->action_index()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-03 01:53:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::order_by() ~ APPPATH/classes/controller/admin/category.php [ 44 ]
2012-09-03 01:53:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::order_by() ~ APPPATH/classes/controller/admin/category.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 01:55:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'id_cetegory' in 'order clause' [ SELECT `categories`.* FROM `categories` AS `categories` GROUP BY `id_category` ORDER BY `id_cetegory` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-03 01:55:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'id_cetegory' in 'order clause' [ SELECT `categories`.* FROM `categories` AS `categories` GROUP BY `id_category` ORDER BY `id_cetegory` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/travel.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', 'Model_Categorie...', Array)
#1 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(44): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Category->action_index()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-03 02:04:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::save() ~ APPPATH/classes/controller/admin/category.php [ 88 ]
2012-09-03 02:04:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::save() ~ APPPATH/classes/controller/admin/category.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 02:04:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::save() ~ APPPATH/classes/controller/admin/category.php [ 88 ]
2012-09-03 02:04:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::save() ~ APPPATH/classes/controller/admin/category.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 02:04:49 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete categories model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-03 02:04:49 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete categories model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(79): Kohana_ORM->delete()
#1 [internal function]: Controller_Admin_Category->action_delete()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 02:06:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::pk() ~ APPPATH/classes/controller/admin/category.php [ 84 ]
2012-09-03 02:06:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::pk() ~ APPPATH/classes/controller/admin/category.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 02:06:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::save() ~ APPPATH/classes/controller/admin/category.php [ 90 ]
2012-09-03 02:06:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::save() ~ APPPATH/classes/controller/admin/category.php [ 90 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 02:12:09 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-03 02:12:09 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(100): Kohana_ORM->delete()
#1 [internal function]: Controller_Admin_Post->action_delete()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 02:14:01 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-03 02:14:01 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(100): Kohana_ORM->delete()
#1 [internal function]: Controller_Admin_Post->action_delete()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 02:14:09 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-03 02:14:09 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(100): Kohana_ORM->delete()
#1 [internal function]: Controller_Admin_Post->action_delete()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 02:14:11 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-03 02:14:11 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(100): Kohana_ORM->delete()
#1 [internal function]: Controller_Admin_Post->action_delete()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 02:14:14 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-03 02:14:14 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(100): Kohana_ORM->delete()
#1 [internal function]: Controller_Admin_Post->action_delete()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 02:14:17 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-03 02:14:17 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(100): Kohana_ORM->delete()
#1 [internal function]: Controller_Admin_Post->action_delete()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 02:14:33 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-03 02:14:33 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete posts model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(100): Kohana_ORM->delete()
#1 [internal function]: Controller_Admin_Post->action_delete()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 02:20:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::save() ~ APPPATH/classes/controller/admin/category.php [ 89 ]
2012-09-03 02:20:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::save() ~ APPPATH/classes/controller/admin/category.php [ 89 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-03 02:20:48 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete categories model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-03 02:20:48 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete categories model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(79): Kohana_ORM->delete()
#1 [internal function]: Controller_Admin_Category->action_delete()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 02:22:02 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete categories model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
2012-09-03 02:22:02 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete categories model because it is not loaded. ~ MODPATH/orm/classes/kohana/orm.php [ 1326 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(79): Kohana_ORM->delete()
#1 [internal function]: Controller_Admin_Category->action_delete()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 11:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-datepicker.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-03 11:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-datepicker.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 12:00:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-datepicker.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-03 12:00:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-datepicker.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 14:17:21 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
2012-09-03 14:17:21 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 32, Array)
#1 [internal function]: Controller_Admin_Post->after()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 14:26:07 --- ERROR: ErrorException [ 8 ]: Undefined index: id_category ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2012-09-03 14:26:07 --- STRACE: ErrorException [ 8 ]: Undefined index: id_category ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 102, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(164): Kohana_Validation->offsetGet('id_category')
#2 [internal function]: Controller_Admin_Post->action_save()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-03 14:28:48 --- ERROR: ErrorException [ 8 ]: Undefined index: id_category ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2012-09-03 14:28:48 --- STRACE: ErrorException [ 8 ]: Undefined index: id_category ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 102, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(164): Kohana_Validation->offsetGet('id_category')
#2 [internal function]: Controller_Admin_Post->action_save()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-03 14:30:20 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
2012-09-03 14:30:20 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 32, Array)
#1 [internal function]: Controller_Admin_Post->after()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 14:31:15 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
2012-09-03 14:31:15 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 32, Array)
#1 [internal function]: Controller_Admin_Post->after()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 14:32:17 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
2012-09-03 14:32:17 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 32, Array)
#1 [internal function]: Controller_Admin_Post->after()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 14:35:00 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
2012-09-03 14:35:00 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 32, Array)
#1 [internal function]: Controller_Admin_Post->after()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 14:47:59 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
2012-09-03 14:47:59 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 32, Array)
#1 [internal function]: Controller_Admin_Post->after()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 14:50:21 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
2012-09-03 14:50:21 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 32, Array)
#1 [internal function]: Controller_Admin_Post->after()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 14:52:06 --- ERROR: ErrorException [ 8 ]: Undefined index: id_category ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2012-09-03 14:52:06 --- STRACE: ErrorException [ 8 ]: Undefined index: id_category ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 102, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(164): Kohana_Validation->offsetGet('id_category')
#2 [internal function]: Controller_Admin_Post->action_save()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-03 14:53:04 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
2012-09-03 14:53:04 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 32, Array)
#1 [internal function]: Controller_Admin_Post->after()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 14:59:19 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
2012-09-03 14:59:19 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/post.php [ 32 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 32, Array)
#1 [internal function]: Controller_Admin_Post->after()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-03 15:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-sortable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-03 15:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-sortable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-03 15:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-03 15:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}