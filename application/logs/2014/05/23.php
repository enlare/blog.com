<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-05-23 14:59:07 --- ERROR: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-05-23 14:59:07 --- STRACE: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /var/www/trvl1.com/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/trvl1.com/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/trvl1.com/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menus')
#3 /var/www/trvl1.com/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /var/www/trvl1.com/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /var/www/trvl1.com/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /var/www/trvl1.com/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#7 /var/www/trvl1.com/application/classes/controller/base.php(19): Kohana_ORM::factory('menus')
#8 [internal function]: Controller_Base->before()
#9 /var/www/trvl1.com/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Index))
#10 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#13 {main}
2014-05-23 14:59:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 14:59:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 14:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/index.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 14:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/index.html ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
2014-05-23 15:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:20:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:20:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:22:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:22:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:39:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:39:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:45:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:45:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:45:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:45:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:47:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:47:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:49:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:49:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 15:50:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 15:50:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:13:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:13:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:14:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:14:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:15:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:15:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:16:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:25:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:25:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:30:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:30:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:30:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:30:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:34:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:34:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:34:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:34:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:36:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:36:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:37:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:37:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:37:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:37:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:38:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:38:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:39:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:39:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:44:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:44:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:45:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:45:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:45:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:45:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:46:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:46:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:46:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:46:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:51:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:51:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:52:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:52:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:53:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:53:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:53:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:53:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:54:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:54:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:54:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:54:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:54:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:54:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-05-23 16:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: hotel/css/img/social.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}
2014-05-23 16:55:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:55:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 16:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 16:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:01:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:01:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:08:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:08:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:12:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:12:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:14:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:14:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:17:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:17:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:20:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:20:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:20:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:20:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:22:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:22:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:24:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:24:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:24:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:24:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:24:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:24:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:42:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:42:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}
2014-05-23 17:47:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-05-23 17:47:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/bootstrap.css.map was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}