<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-21 00:40:19 --- ERROR: Kohana_Exception [ 0 ]: This method requires imagelayereffect, which is only available in the bundled version of GD ~ MODPATH/image/classes/kohana/image/gd.php [ 401 ]
2012-09-21 00:40:19 --- STRACE: Kohana_Exception [ 0 ]: This method requires imagelayereffect, which is only available in the bundled version of GD ~ MODPATH/image/classes/kohana/image/gd.php [ 401 ]
--
#0 /var/www/public_html/tr.com/modules/image/classes/kohana/image.php(528): Kohana_Image_GD->_do_watermark(Object(Image_GD), 535, 590, 100)
#1 /var/www/public_html/tr.com/application/classes/controller/image.php(63): Kohana_Image->watermark(Object(Image_GD), 535, 590)
#2 [internal function]: Controller_Image->action_full()
#3 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#4 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-21 01:02:28 --- ERROR: Kohana_Exception [ 0 ]: This method requires imagelayereffect, which is only available in the bundled version of GD ~ MODPATH/image/classes/kohana/image/gd.php [ 401 ]
2012-09-21 01:02:28 --- STRACE: Kohana_Exception [ 0 ]: This method requires imagelayereffect, which is only available in the bundled version of GD ~ MODPATH/image/classes/kohana/image/gd.php [ 401 ]
--
#0 /var/www/public_html/tr.com/modules/image/classes/kohana/image.php(528): Kohana_Image_GD->_do_watermark(Object(Image_GD), 535, 590, 100)
#1 /var/www/public_html/tr.com/application/classes/controller/image.php(63): Kohana_Image->watermark(Object(Image_GD), 535, 590)
#2 [internal function]: Controller_Image->action_full()
#3 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#4 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-21 01:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 01:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 01:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 01:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 01:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 01:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 01:10:50 --- ERROR: Kohana_Exception [ 0 ]: This method requires imagelayereffect, which is only available in the bundled version of GD ~ MODPATH/image/classes/kohana/image/gd.php [ 401 ]
2012-09-21 01:10:50 --- STRACE: Kohana_Exception [ 0 ]: This method requires imagelayereffect, which is only available in the bundled version of GD ~ MODPATH/image/classes/kohana/image/gd.php [ 401 ]
--
#0 /var/www/public_html/tr.com/modules/image/classes/kohana/image.php(528): Kohana_Image_GD->_do_watermark(Object(Image_GD), 535, 590, 100)
#1 /var/www/public_html/tr.com/application/classes/controller/image.php(63): Kohana_Image->watermark(Object(Image_GD), 535, 590)
#2 [internal function]: Controller_Image->action_full()
#3 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#4 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-21 02:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 02:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 02:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 02:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 02:15:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 02:15:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 02:45:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-21 02:45:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/tr.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/public_html/tr.com/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/tr.com/application/classes/model/categories.php(18): Kohana_ORM->count_all()
#3 [internal function]: Model_Categories::urlunique(NULL, Object(Validation), 'catTitle')
#4 /var/www/public_html/tr.com/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#5 /var/www/public_html/tr.com/application/classes/controller/admin/category.php(153): Kohana_Validation->check()
#6 [internal function]: Controller_Admin_Category->action_save()
#7 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#8 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-21 02:45:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-21 02:45:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/tr.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/public_html/tr.com/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/tr.com/application/classes/model/categories.php(18): Kohana_ORM->count_all()
#3 [internal function]: Model_Categories::urlunique(NULL, Object(Validation), 'catTitle')
#4 /var/www/public_html/tr.com/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#5 /var/www/public_html/tr.com/application/classes/controller/admin/category.php(153): Kohana_Validation->check()
#6 [internal function]: Controller_Admin_Category->action_save()
#7 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#8 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-21 02:45:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-21 02:45:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/tr.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/public_html/tr.com/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/tr.com/application/classes/model/categories.php(18): Kohana_ORM->count_all()
#3 [internal function]: Model_Categories::urlunique(NULL, Object(Validation), 'catTitle')
#4 /var/www/public_html/tr.com/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#5 /var/www/public_html/tr.com/application/classes/controller/admin/category.php(153): Kohana_Validation->check()
#6 [internal function]: Controller_Admin_Category->action_save()
#7 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#8 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-21 02:45:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-21 02:45:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/tr.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/public_html/tr.com/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/tr.com/application/classes/model/categories.php(18): Kohana_ORM->count_all()
#3 [internal function]: Model_Categories::urlunique(NULL, Object(Validation), 'catTitle')
#4 /var/www/public_html/tr.com/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#5 /var/www/public_html/tr.com/application/classes/controller/admin/category.php(153): Kohana_Validation->check()
#6 [internal function]: Controller_Admin_Category->action_save()
#7 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#8 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-21 02:45:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-21 02:45:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/tr.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/public_html/tr.com/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/tr.com/application/classes/model/categories.php(18): Kohana_ORM->count_all()
#3 [internal function]: Model_Categories::urlunique(NULL, Object(Validation), 'catTitle')
#4 /var/www/public_html/tr.com/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#5 /var/www/public_html/tr.com/application/classes/controller/admin/category.php(153): Kohana_Validation->check()
#6 [internal function]: Controller_Admin_Category->action_save()
#7 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#8 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-21 02:45:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-21 02:45:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/tr.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/public_html/tr.com/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/tr.com/application/classes/model/categories.php(18): Kohana_ORM->count_all()
#3 [internal function]: Model_Categories::urlunique(NULL, Object(Validation), 'catTitle')
#4 /var/www/public_html/tr.com/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#5 /var/www/public_html/tr.com/application/classes/controller/admin/category.php(153): Kohana_Validation->check()
#6 [internal function]: Controller_Admin_Category->action_save()
#7 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#8 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-21 02:45:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-21 02:45:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/tr.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/public_html/tr.com/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/tr.com/application/classes/model/categories.php(18): Kohana_ORM->count_all()
#3 [internal function]: Model_Categories::urlunique(NULL, Object(Validation), 'catTitle')
#4 /var/www/public_html/tr.com/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#5 /var/www/public_html/tr.com/application/classes/controller/admin/category.php(153): Kohana_Validation->check()
#6 [internal function]: Controller_Admin_Category->action_save()
#7 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#8 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-21 02:45:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-21 02:45:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'full__url' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `posts` AS `posts` WHERE (`full__url` = '') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/tr.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/public_html/tr.com/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/tr.com/application/classes/model/categories.php(18): Kohana_ORM->count_all()
#3 [internal function]: Model_Categories::urlunique(NULL, Object(Validation), 'catTitle')
#4 /var/www/public_html/tr.com/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#5 /var/www/public_html/tr.com/application/classes/controller/admin/category.php(153): Kohana_Validation->check()
#6 [internal function]: Controller_Admin_Category->action_save()
#7 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#8 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-21 03:00:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/coments was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 03:00:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/coments was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 03:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/coments was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 03:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/coments was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 03:01:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/coments was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-21 03:01:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/coments was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-21 03:01:48 --- ERROR: View_Exception [ 0 ]: The requested view scripts/admin/comments could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-21 03:01:48 --- STRACE: View_Exception [ 0 ]: The requested view scripts/admin/comments could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/public_html/tr.com/system/classes/kohana/view.php(137): Kohana_View->set_filename('scripts/admin/c...')
#1 /var/www/public_html/tr.com/system/classes/kohana/view.php(30): Kohana_View->__construct('scripts/admin/c...', NULL)
#2 /var/www/public_html/tr.com/application/classes/controller/admin/comments.php(26): Kohana_View::factory('scripts/admin/c...')
#3 [internal function]: Controller_Admin_Comments->action_index()
#4 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#5 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-21 04:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 04:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:20:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:20:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:21:02 --- ERROR: Kohana_Exception [ 0 ]: Imagick is not installed, or the extension is not loaded ~ MODPATH/image/classes/kohana/image/imagick.php [ 28 ]
2012-09-21 13:21:02 --- STRACE: Kohana_Exception [ 0 ]: Imagick is not installed, or the extension is not loaded ~ MODPATH/image/classes/kohana/image/imagick.php [ 28 ]
--
#0 /var/www/public_html/tr.com/modules/image/classes/kohana/image/imagick.php(45): Kohana_Image_Imagick::check()
#1 /var/www/public_html/tr.com/modules/image/classes/kohana/image.php(53): Kohana_Image_Imagick->__construct('/var/www/public...')
#2 /var/www/public_html/tr.com/application/classes/controller/image.php(56): Kohana_Image::factory('/var/www/public...')
#3 [internal function]: Controller_Image->action_full()
#4 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-21 13:21:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:21:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:21:22 --- ERROR: Kohana_Exception [ 0 ]: Imagick is not installed, or the extension is not loaded ~ MODPATH/image/classes/kohana/image/imagick.php [ 28 ]
2012-09-21 13:21:22 --- STRACE: Kohana_Exception [ 0 ]: Imagick is not installed, or the extension is not loaded ~ MODPATH/image/classes/kohana/image/imagick.php [ 28 ]
--
#0 /var/www/public_html/tr.com/modules/image/classes/kohana/image/imagick.php(45): Kohana_Image_Imagick::check()
#1 /var/www/public_html/tr.com/modules/image/classes/kohana/image.php(53): Kohana_Image_Imagick->__construct('/var/www/public...')
#2 /var/www/public_html/tr.com/application/classes/controller/image.php(57): Kohana_Image::factory('/var/www/public...')
#3 [internal function]: Controller_Image->action_full()
#4 /var/www/public_html/tr.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/tr.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/tr.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-21 13:21:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:21:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:27:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:27:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:28:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:28:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 13:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 13:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 23:15:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 23:15:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-21 23:15:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-21 23:15:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/tr.com/index.php(109): Kohana_Request->execute()
#1 {main}