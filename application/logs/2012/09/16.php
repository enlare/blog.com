<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-16 00:21:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL print$ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-16 00:21:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL print$ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 00:22:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_Post' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-09-16 00:22:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_Post' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-16 00:22:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'full_url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full_url` = 'mnm') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-16 00:22:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'full_url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full_url` = 'mnm') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/travel.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/travel.com/application/classes/model/categories.php(27): Kohana_ORM->count_all()
#3 [internal function]: Model_Categories::urlunique('mnm', Object(Validation), 'title')
#4 /var/www/public_html/travel.com/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#5 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(114): Kohana_Validation->check()
#6 [internal function]: Controller_Admin_Category->action_new()
#7 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#8 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-16 01:45:49 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/category.php [ 33 ]
2012-09-16 01:45:49 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/category.php [ 33 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(33): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 33, Array)
#1 [internal function]: Controller_Admin_Category->after()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-16 01:46:50 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/category.php [ 33 ]
2012-09-16 01:46:50 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/admin/category.php [ 33 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(33): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/public...', 33, Array)
#1 [internal function]: Controller_Admin_Category->after()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-16 01:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/categor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-16 01:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/categor was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 01:47:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Categories::translitIt() ~ APPPATH/classes/controller/admin/category.php [ 120 ]
2012-09-16 01:47:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Categories::translitIt() ~ APPPATH/classes/controller/admin/category.php [ 120 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-16 01:47:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Categories::translitIt() ~ APPPATH/classes/controller/admin/category.php [ 120 ]
2012-09-16 01:47:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Categories::translitIt() ~ APPPATH/classes/controller/admin/category.php [ 120 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-16 01:48:22 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Posts as array ~ APPPATH/classes/controller/admin/category.php [ 123 ]
2012-09-16 01:48:22 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Posts as array ~ APPPATH/classes/controller/admin/category.php [ 123 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-16 01:50:18 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Posts as array ~ APPPATH/classes/controller/admin/category.php [ 123 ]
2012-09-16 01:50:18 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Posts as array ~ APPPATH/classes/controller/admin/category.php [ 123 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-16 02:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-16 02:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 02:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-16 02:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 02:48:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-16 02:48:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 02:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-16 02:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 02:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/galery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-16 02:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/galery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 02:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/galery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-16 02:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/galery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 02:57:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/galÐ´ery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-16 02:57:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/galÐ´ery was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 03:43:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-16 03:43:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 03:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-16 03:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 03:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-16 03:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 03:53:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-16 03:53:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 04:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL travel was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-16 04:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL travel was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 04:43:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL travel was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-16 04:43:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL travel was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 04:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 04:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 04:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 04:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 04:45:07 --- ERROR: View_Exception [ 0 ]: The requested view scripts/gallery could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-09-16 04:45:07 --- STRACE: View_Exception [ 0 ]: The requested view scripts/gallery could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\view.php(137): Kohana_View->set_filename('scripts/gallery')
#1 X:\home\localhost\www\travel\system\classes\kohana\view.php(30): Kohana_View->__construct('scripts/gallery', NULL)
#2 X:\home\localhost\www\travel\application\classes\controller\ajax.php(175): Kohana_View::factory('scripts/gallery')
#3 [internal function]: Controller_Ajax->action_getgallery()
#4 X:\home\localhost\www\travel\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-16 04:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 04:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 04:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 04:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 04:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/coments was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-16 04:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/coments was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 04:53:34 --- ERROR: View_Exception [ 0 ]: The requested view scripts/gallery could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-09-16 04:53:34 --- STRACE: View_Exception [ 0 ]: The requested view scripts/gallery could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\view.php(137): Kohana_View->set_filename('scripts/gallery')
#1 X:\home\localhost\www\travel\system\classes\kohana\view.php(30): Kohana_View->__construct('scripts/gallery', NULL)
#2 X:\home\localhost\www\travel\application\classes\controller\ajax.php(175): Kohana_View::factory('scripts/gallery')
#3 [internal function]: Controller_Ajax->action_getgallery()
#4 X:\home\localhost\www\travel\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-16 04:56:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$countItemInRowGallery ~ APPPATH\classes\controller\ajax.php [ 186 ]
2012-09-16 04:56:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$countItemInRowGallery ~ APPPATH\classes\controller\ajax.php [ 186 ]
--
#0 X:\home\localhost\www\travel\application\classes\controller\ajax.php(186): Kohana_Core::error_handler()
#1 [internal function]: Controller_Ajax->action_getgallery(Object(Controller_Ajax))
#2 X:\home\localhost\www\travel\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-16 04:56:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$previewWidth ~ APPPATH\classes\controller\ajax.php [ 159 ]
2012-09-16 04:56:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$previewWidth ~ APPPATH\classes\controller\ajax.php [ 159 ]
--
#0 X:\home\localhost\www\travel\application\classes\controller\ajax.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Ajax->action_uploadimage(Object(Controller_Ajax))
#2 X:\home\localhost\www\travel\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-16 04:56:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$previewWidth ~ APPPATH\classes\controller\ajax.php [ 159 ]
2012-09-16 04:56:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$previewWidth ~ APPPATH\classes\controller\ajax.php [ 159 ]
--
#0 X:\home\localhost\www\travel\application\classes\controller\ajax.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Ajax->action_uploadimage(Object(Controller_Ajax))
#2 X:\home\localhost\www\travel\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-16 04:56:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$previewWidth ~ APPPATH\classes\controller\ajax.php [ 159 ]
2012-09-16 04:56:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$previewWidth ~ APPPATH\classes\controller\ajax.php [ 159 ]
--
#0 X:\home\localhost\www\travel\application\classes\controller\ajax.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Ajax->action_uploadimage(Object(Controller_Ajax))
#2 X:\home\localhost\www\travel\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-16 04:56:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$previewWidth ~ APPPATH\classes\controller\ajax.php [ 159 ]
2012-09-16 04:56:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$previewWidth ~ APPPATH\classes\controller\ajax.php [ 159 ]
--
#0 X:\home\localhost\www\travel\application\classes\controller\ajax.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Ajax->action_uploadimage(Object(Controller_Ajax))
#2 X:\home\localhost\www\travel\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-16 04:56:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$previewWidth ~ APPPATH\classes\controller\ajax.php [ 159 ]
2012-09-16 04:56:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$previewWidth ~ APPPATH\classes\controller\ajax.php [ 159 ]
--
#0 X:\home\localhost\www\travel\application\classes\controller\ajax.php(159): Kohana_Core::error_handler()
#1 [internal function]: Controller_Ajax->action_uploadimage(Object(Controller_Ajax))
#2 X:\home\localhost\www\travel\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-16 04:56:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$countItemInRowGallery ~ APPPATH\classes\controller\ajax.php [ 186 ]
2012-09-16 04:56:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$countItemInRowGallery ~ APPPATH\classes\controller\ajax.php [ 186 ]
--
#0 X:\home\localhost\www\travel\application\classes\controller\ajax.php(186): Kohana_Core::error_handler()
#1 [internal function]: Controller_Ajax->action_getgallery(Object(Controller_Ajax))
#2 X:\home\localhost\www\travel\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-16 04:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/preview/Chrysanthemum.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 04:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/preview/Chrysanthemum.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 04:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/preview/Koala.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 04:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/preview/Koala.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 04:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/preview/Hydrangeas.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 04:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/preview/Hydrangeas.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 04:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/preview/Jellyfish.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 04:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/preview/Jellyfish.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 04:58:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/preview/Desert.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 04:58:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: upload/preview/Desert.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 05:01:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/full/Hydrangeas.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 05:01:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/full/Hydrangeas.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 05:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/full/Hydrangeas.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 05:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: image/full/Hydrangeas.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 05:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 05:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 05:03:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 05:03:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 05:03:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 05:03:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 05:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 05:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 05:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 05:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 05:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 05:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 05:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 05:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 05:09:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 05:09:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 05:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 05:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 05:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 05:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 05:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 05:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 05:10:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 05:10:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 10:21:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 10:21:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 10:21:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 10:21:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 10:22:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 10:22:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 10:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 10:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 10:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 10:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 11:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 11:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 11:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 11:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 12:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 12:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 12:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 12:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 12:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 12:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 12:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 12:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 12:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 12:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 12:55:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 12:55:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 12:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 12:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 12:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 12:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 12:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 12:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 12:59:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 12:59:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 12:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 12:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 12:59:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 12:59:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 12:59:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/20/09/2012/ð¢ð¾ð±ñ‹ñ‚ð¸ðµ-ñƒð¾ð±ñ‹ñ‚ð¸ðµ ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 12:59:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: events/20/09/2012/ð¢ð¾ð±ñ‹ñ‚ð¸ðµ-ñƒð¾ð±ñ‹ñ‚ð¸ðµ ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:05:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:05:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:05:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:05:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:05:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:05:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:08:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:08:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:08:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:08:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:08:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:08:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:08:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:08:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:11:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:11:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:12:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:12:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:15:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:15:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:15:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:15:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:15:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:15:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:15:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:15:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:15:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:16:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:16:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:16:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:16:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:16:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:16:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:16:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:16:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:17:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:17:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:17:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:17:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:17:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:17:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:17:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:17:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:17:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:17:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:17:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:17:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:19:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:19:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:19:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:19:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:20:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:20:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:20:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:20:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:20:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:20:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:22:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:22:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:27:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:27:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:27:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:27:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:28:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:28:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:38:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:38:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:38:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:38:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:38:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:38:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:39:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-16 13:39:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-16 13:39:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:39:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 13:39:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 13:39:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 14:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 14:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 14:35:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 14:35:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 14:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 14:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 14:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 14:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 14:36:29 --- ERROR: View_Exception [ 0 ]: The requested view scripts/article/getevent could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-09-16 14:36:29 --- STRACE: View_Exception [ 0 ]: The requested view scripts/article/getevent could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\view.php(137): Kohana_View->set_filename('scripts/article...')
#1 X:\home\localhost\www\travel\system\classes\kohana\view.php(30): Kohana_View->__construct('scripts/article...', NULL)
#2 X:\home\localhost\www\travel\application\classes\controller\ajax.php(51): Kohana_View::factory('scripts/article...')
#3 [internal function]: Controller_Ajax->action_getevent()
#4 X:\home\localhost\www\travel\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-16 14:37:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 14:37:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 14:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 14:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 14:38:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 14:38:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 14:38:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 14:38:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 14:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 14:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/gallery/images/lightbox-blank.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 15:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 15:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 15:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 15:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 15:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 15:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 15:12:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-16 15:12:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-16 15:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL yoyoyoyoy was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-16 15:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL yoyoyoyoy was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 X:\home\localhost\www\travel\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 X:\home\localhost\www\travel\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 X:\home\localhost\www\travel\index.php(109): Kohana_Request->execute()
#3 {main}