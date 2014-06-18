<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-06-18 16:23:33 --- ERROR: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2014-06-18 16:23:33 --- STRACE: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
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
2014-06-18 16:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2014-06-18 16:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#1 {main}