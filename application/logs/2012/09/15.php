<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-15 04:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:22:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:22:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:22:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:22:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:23:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:23:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:24:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'comment_datetime' in 'order clause' [ SELECT `comments`.* FROM `comments` AS `comments` WHERE `id_post` = '40' ORDER BY `comment_datetime` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-15 04:24:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'comment_datetime' in 'order clause' [ SELECT `comments`.* FROM `comments` AS `comments` WHERE `id_post` = '40' ORDER BY `comment_datetime` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/travel.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comments', Array)
#1 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(66): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Post->action_edit()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 04:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:24:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:24:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:24:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:24:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:24:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:24:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:24:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:24:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:24:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'comment_datetime' in 'order clause' [ SELECT `comments`.* FROM `comments` AS `comments` WHERE `id_post` = '40' ORDER BY `comment_datetime` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-15 04:24:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'comment_datetime' in 'order clause' [ SELECT `comments`.* FROM `comments` AS `comments` WHERE `id_post` = '40' ORDER BY `comment_datetime` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/travel.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comments', Array)
#1 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(66): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Post->action_edit()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 04:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:52:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:52:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL events/1355032800 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-15 04:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL events/1355032800 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-15 04:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:53:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:53:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:53:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:53:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:55:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:55:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 04:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 04:57:28 --- ERROR: View_Exception [ 0 ]: The requested view scripts/article/getevent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-15 04:57:28 --- STRACE: View_Exception [ 0 ]: The requested view scripts/article/getevent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/view.php(137): Kohana_View->set_filename('scripts/article...')
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(30): Kohana_View->__construct('scripts/article...', NULL)
#2 /var/www/public_html/travel.com/application/classes/controller/ajax.php(48): Kohana_View::factory('scripts/article...')
#3 [internal function]: Controller_Ajax->action_getevent()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-15 07:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:26:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:26:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:27:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:27:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:27:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:27:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:27:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:27:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:49:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:49:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:50:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:50:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:50:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL print$ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-15 07:50:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL print$ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-15 07:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL print$ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-15 07:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL print$ was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-15 07:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:54:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: articlesAll ~ APPPATH/views/scripts/article/article.php [ 41 ]
2012-09-15 07:54:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: articlesAll ~ APPPATH/views/scripts/article/article.php [ 41 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/article/article.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 41, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/common.php(91): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Events))
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-15 07:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:54:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:54:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:54:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:54:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:55:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: articlesAll ~ APPPATH/views/scripts/article/article.php [ 41 ]
2012-09-15 07:55:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: articlesAll ~ APPPATH/views/scripts/article/article.php [ 41 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/article/article.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 41, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/common.php(91): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Events))
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-15 07:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 07:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 07:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:04:27 --- ERROR: View_Exception [ 0 ]: The requested view scripts/article/oneevent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-15 08:04:27 --- STRACE: View_Exception [ 0 ]: The requested view scripts/article/oneevent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/view.php(137): Kohana_View->set_filename('scripts/article...')
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(30): Kohana_View->__construct('scripts/article...', NULL)
#2 /var/www/public_html/travel.com/application/classes/controller/events.php(73): Kohana_View::factory('scripts/article...')
#3 [internal function]: Controller_Events->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Events))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-15 08:06:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: oneEvent ~ APPPATH/views/scripts/events/oneevent.php [ 3 ]
2012-09-15 08:06:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: oneEvent ~ APPPATH/views/scripts/events/oneevent.php [ 3 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/events/oneevent.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 3, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/common.php(91): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Events))
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-15 08:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:07:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:07:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-15 08:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/geteventsbydate/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-15 08:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:11:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:11:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:11:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:11:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 08:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 08:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:15:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:15:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:15:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:15:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:15:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:15:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:24:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:24:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:55:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:55:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 17:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 17:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:00:46 --- ERROR: View_Exception [ 0 ]: The requested view scripts/article/getevent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-15 18:00:46 --- STRACE: View_Exception [ 0 ]: The requested view scripts/article/getevent could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/view.php(137): Kohana_View->set_filename('scripts/article...')
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(30): Kohana_View->__construct('scripts/article...', NULL)
#2 /var/www/public_html/travel.com/application/classes/controller/ajax.php(48): Kohana_View::factory('scripts/article...')
#3 [internal function]: Controller_Ajax->action_getevent()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-15 18:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:04:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:04:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:04:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:04:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:06:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:06:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:06:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:06:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:15:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:15:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:15:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:15:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:16:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:16:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:16:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:16:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:16:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:16:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:16:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:16:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:16:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:16:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:17:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:17:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:21:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:21:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:22:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:22:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:23:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:23:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:23:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:23:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 18:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 18:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 19:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 19:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 19:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 19:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 19:07:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 19:07:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 19:07:26 --- ERROR: View_Exception [ 0 ]: The requested view scripts/search could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-15 19:07:26 --- STRACE: View_Exception [ 0 ]: The requested view scripts/search could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/view.php(137): Kohana_View->set_filename('scripts/search')
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(30): Kohana_View->__construct('scripts/search', NULL)
#2 /var/www/public_html/travel.com/application/classes/controller/search.php(13): Kohana_View::factory('scripts/search')
#3 [internal function]: Controller_Search->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Search))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-15 19:09:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
2012-09-15 19:09:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
--
#0 /var/www/public_html/travel.com/application/views/layouts/common.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 58, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Search))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 19:17:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
2012-09-15 19:17:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
--
#0 /var/www/public_html/travel.com/application/views/layouts/common.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 58, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Search))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 19:18:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
2012-09-15 19:18:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
--
#0 /var/www/public_html/travel.com/application/views/layouts/common.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 58, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Search))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 19:19:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
2012-09-15 19:19:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
--
#0 /var/www/public_html/travel.com/application/views/layouts/common.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 58, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Search))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 19:19:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
2012-09-15 19:19:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
--
#0 /var/www/public_html/travel.com/application/views/layouts/common.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 58, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Search))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 19:20:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
2012-09-15 19:20:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
--
#0 /var/www/public_html/travel.com/application/views/layouts/common.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 58, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Search))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 19:20:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
2012-09-15 19:20:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
--
#0 /var/www/public_html/travel.com/application/views/layouts/common.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 58, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Search))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 19:22:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
2012-09-15 19:22:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
--
#0 /var/www/public_html/travel.com/application/views/layouts/common.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 58, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Search))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 19:22:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
2012-09-15 19:22:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
--
#0 /var/www/public_html/travel.com/application/views/layouts/common.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 58, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Search))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 19:28:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/soapCaller.bs ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 19:28:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/soapCaller.bs ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 19:31:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
2012-09-15 19:31:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/layouts/common.php [ 58 ]
--
#0 /var/www/public_html/travel.com/application/views/layouts/common.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 58, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Search))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 19:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 19:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 19:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 19:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 19:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 19:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:01:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: searchword ~ APPPATH/views/scripts/search/search.php [ 12 ]
2012-09-15 20:01:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: searchword ~ APPPATH/views/scripts/search/search.php [ 12 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/search/search.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 12, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/common.php(98): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Search))
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-15 20:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:01:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:01:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:03:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:03:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:06:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:06:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:06:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:06:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:07:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:07:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sdfsdfsdfdsf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-15 20:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sdfsdfsdfdsf was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-15 20:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:59:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:59:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 20:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 20:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:00:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:00:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:01:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:01:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:01:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:01:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:02:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:02:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:03:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:03:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:03:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:03:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:03:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:03:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:13:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:13:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:13:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:13:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:13:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:13:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:33:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:33:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:33:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:33:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:34:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:34:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:40:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 21:40:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 21:42:39 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/login.php [ 33 ]
2012-09-15 21:42:39 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/admin/login.php [ 33 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/admin/login.php(33): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/public...', 33, Array)
#1 [internal function]: Controller_Admin_Login->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-15 21:46:22 --- ERROR: View_Exception [ 0 ]: The requested view layouts/adminin_login could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-09-15 21:46:22 --- STRACE: View_Exception [ 0 ]: The requested view layouts/adminin_login could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/view.php(137): Kohana_View->set_filename('layouts/adminin...')
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(30): Kohana_View->__construct('layouts/adminin...', NULL)
#2 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(33): Kohana_View::factory('layouts/adminin...')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-15 22:57:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'comment_datetime' in 'order clause' [ SELECT `comments`.* FROM `comments` AS `comments` WHERE `id_post` = '9' ORDER BY `comment_datetime` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-15 22:57:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'comment_datetime' in 'order clause' [ SELECT `comments`.* FROM `comments` AS `comments` WHERE `id_post` = '9' ORDER BY `comment_datetime` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/travel.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comments', Array)
#1 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(66): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Post->action_edit()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 22:57:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'comment_datetime' in 'order clause' [ SELECT `comments`.* FROM `comments` AS `comments` WHERE `id_post` = '9' ORDER BY `comment_datetime` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-15 22:57:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'comment_datetime' in 'order clause' [ SELECT `comments`.* FROM `comments` AS `comments` WHERE `id_post` = '9' ORDER BY `comment_datetime` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/travel.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comments', Array)
#1 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(66): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Post->action_edit()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 23:14:52 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'comment_datetime' in 'order clause' [ SELECT `comments`.* FROM `comments` AS `comments` WHERE `id_post` = '9' ORDER BY `comment_datetime` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-09-15 23:14:52 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'comment_datetime' in 'order clause' [ SELECT `comments`.* FROM `comments` AS `comments` WHERE `id_post` = '9' ORDER BY `comment_datetime` DESC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /var/www/public_html/travel.com/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comments', Array)
#1 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/public_html/travel.com/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /var/www/public_html/travel.com/application/classes/controller/admin/post.php(66): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Post->action_edit()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Post))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-15 23:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 23:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/master.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 23:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 23:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 23:15:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-15 23:15:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-15 23:15:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-15 23:15:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-15 23:46:21 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in /var/www/public_html/travel.com/application/classes/controller/admin/category.php on line 184 and defined ~ SYSPATH/classes/kohana/validation.php [ 197 ]
2012-09-15 23:46:21 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in /var/www/public_html/travel.com/application/classes/controller/admin/category.php on line 184 and defined ~ SYSPATH/classes/kohana/validation.php [ 197 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/validation.php(197): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/var/www/public...', 197, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(184): Kohana_Validation->rule('title', Object(Controller_Admin_Category), 'urlunique')
#2 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(112): Controller_Admin_Category->validate(Array)
#3 [internal function]: Controller_Admin_Category->action_new()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-15 23:47:25 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in /var/www/public_html/travel.com/application/classes/controller/admin/category.php on line 184 and defined ~ SYSPATH/classes/kohana/validation.php [ 197 ]
2012-09-15 23:47:25 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in /var/www/public_html/travel.com/application/classes/controller/admin/category.php on line 184 and defined ~ SYSPATH/classes/kohana/validation.php [ 197 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/validation.php(197): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/var/www/public...', 197, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(184): Kohana_Validation->rule('title', Object(Controller_Admin_Category), 'urlunique')
#2 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(112): Controller_Admin_Category->validate(Array)
#3 [internal function]: Controller_Admin_Category->action_new()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-15 23:47:30 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in /var/www/public_html/travel.com/application/classes/controller/admin/category.php on line 184 and defined ~ SYSPATH/classes/kohana/validation.php [ 197 ]
2012-09-15 23:47:30 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in /var/www/public_html/travel.com/application/classes/controller/admin/category.php on line 184 and defined ~ SYSPATH/classes/kohana/validation.php [ 197 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/validation.php(197): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/var/www/public...', 197, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(184): Kohana_Validation->rule('title', Object(Controller_Admin_Category), 'urlunique')
#2 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(112): Controller_Admin_Category->validate(Array)
#3 [internal function]: Controller_Admin_Category->action_new()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-15 23:47:58 --- ERROR: ReflectionException [ 0 ]: Function urlunique() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
2012-09-15 23:47:58 --- STRACE: ReflectionException [ 0 ]: Function urlunique() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/validation.php(383): ReflectionFunction->__construct('urlunique')
#1 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(114): Kohana_Validation->check()
#2 [internal function]: Controller_Admin_Category->action_new()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-15 23:49:40 --- ERROR: ReflectionException [ 0 ]: Trying to invoke non static method Model_Categories::urlunique() without an object ~ SYSPATH/classes/kohana/validation.php [ 397 ]
2012-09-15 23:49:40 --- STRACE: ReflectionException [ 0 ]: Trying to invoke non static method Model_Categories::urlunique() without an object ~ SYSPATH/classes/kohana/validation.php [ 397 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/category.php(114): Kohana_Validation->check()
#2 [internal function]: Controller_Admin_Category->action_new()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}