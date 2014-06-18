<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-06-02 12:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/filters.svg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2014-06-02 12:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hotel/css/filters.svg was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/trvl1.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/trvl1.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/trvl1.com/index.php(109): Kohana_Request->execute()
#3 {main}