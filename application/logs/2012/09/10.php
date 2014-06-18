<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-10 04:19:02 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-10 04:19:02 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/public...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/public...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(26): Kohana_Image::factory('/var/www/public...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-10 04:19:03 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-10 04:19:03 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/public...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/public...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(26): Kohana_Image::factory('/var/www/public...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-10 04:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:20:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:20:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:21:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:21:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:25:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:25:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:28:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:28:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:29:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:29:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:32:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:32:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:32:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:32:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:33:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:33:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:34:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:34:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:36:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:36:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:37:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/ajax/getcontent/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-10 04:37:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/ajax/getcontent/5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-10 04:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:40:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:40:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:40:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:40:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:40:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:40:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 04:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 04:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:48:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1128 ]
2012-09-10 06:48:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1128 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:51:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1128 ]
2012-09-10 06:51:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1128 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:51:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1128 ]
2012-09-10 06:51:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1128 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:51:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1128 ]
2012-09-10 06:51:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1128 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1128 ]
2012-09-10 06:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1128 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
2012-09-10 06:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
2012-09-10 06:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:52:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
2012-09-10 06:52:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
2012-09-10 06:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:52:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
2012-09-10 06:52:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:52:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
2012-09-10 06:52:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:53:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1131 ]
2012-09-10 06:53:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1131 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1131 ]
2012-09-10 06:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1131 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
2012-09-10 06:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
2012-09-10 06:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:57:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
2012-09-10 06:57:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
2012-09-10 06:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
2012-09-10 06:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:57:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
2012-09-10 06:57:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:57:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
2012-09-10 06:57:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 06:57:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
2012-09-10 06:57:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1129 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 07:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
2012-09-10 07:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 07:02:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
2012-09-10 07:02:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 07:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
2012-09-10 07:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1130 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 07:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2012-09-10 07:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:37:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1132 ]
2012-09-10 08:37:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1132 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5. ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5. ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:40:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5. ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:40:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5. ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:41:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:41:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:41:24 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-10 08:41:24 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/public...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/public...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(26): Kohana_Image::factory('/var/www/public...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-10 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:41:24 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-10 08:41:24 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/public...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/public...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(26): Kohana_Image::factory('/var/www/public...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-10 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:41:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:41:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:41:38 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-10 08:41:38 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/public...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/public...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(26): Kohana_Image::factory('/var/www/public...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-10 08:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:41:48 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-10 08:41:48 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/public...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/public...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(26): Kohana_Image::factory('/var/www/public...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-10 08:41:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:41:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:41:49 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-10 08:41:49 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/public...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/public...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(26): Kohana_Image::factory('/var/www/public...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-10 08:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/oiuytr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-10 08:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/oiuytr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-10 08:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/index/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/index/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:44:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:44:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:45:24 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-10 08:45:24 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/public...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/public...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(26): Kohana_Image::factory('/var/www/public...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-10 08:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/oiuytr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-10 08:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/oiuytr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-10 08:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:08 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-10 08:48:08 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/public...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/public...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(26): Kohana_Image::factory('/var/www/public...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-10 08:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:12 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-10 08:48:12 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/public...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/public...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(26): Kohana_Image::factory('/var/www/public...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-10 08:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:19 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-10 08:48:19 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
--
#0 /var/www/public_html/travel.com/modules/image/classes/kohana/image/gd.php(90): Kohana_Image->__construct('/var/www/public...')
#1 /var/www/public_html/travel.com/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/public...')
#2 /var/www/public_html/travel.com/application/classes/controller/image.php(26): Kohana_Image::factory('/var/www/public...', 'GD')
#3 [internal function]: Controller_Image->action_index()
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Image))
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-10 08:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:51:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:51:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-10 08:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-10 08:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}