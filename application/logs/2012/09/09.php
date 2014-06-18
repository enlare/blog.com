<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-09 12:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 12:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 12:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 12:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 12:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 12:56:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:56:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 12:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 12:56:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 12:56:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:35:03 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:35:03 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:35:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:35:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:35:46 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:35:46 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:35:46 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:35:46 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:35:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:35:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:35:56 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:35:56 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:35:57 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:35:57 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:36:23 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:36:23 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:36:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:36:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:38:01 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:38:01 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:38:02 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:38:02 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:47:30 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:47:30 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:47:30 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:47:30 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:47:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:47:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:48:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:48:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:48:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:48:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:49:43 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:49:43 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:49:46 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:49:46 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:49:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:49:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:50:09 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:50:09 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:50:13 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:50:13 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:50:40 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:50:40 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:50:43 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:50:43 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:50:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:50:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:51:12 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:51:12 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:51:15 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:51:15 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:51:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:51:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:51:44 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:51:44 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:51:44 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:51:44 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:51:47 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:51:47 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:51:47 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:51:47 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:51:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:51:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:52:26 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:52:26 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:52:27 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:52:27 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:52:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:52:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:55:52 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:55:52 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:55:56 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:55:56 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:58:55 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 13:58:55 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 13:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 13:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 13:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:03:42 --- ERROR: ErrorException [ 1 ]: Call to undefined function length() ~ APPPATH/views/scripts/article/article.php [ 30 ]
2012-09-09 14:03:42 --- STRACE: ErrorException [ 1 ]: Call to undefined function length() ~ APPPATH/views/scripts/article/article.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-09 14:05:51 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:05:51 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:05:52 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:05:52 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:06:30 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:06:30 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:06:30 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:06:30 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:06:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:06:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:06:33 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:06:33 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:06:33 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:06:33 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:06:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:06:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:06:49 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:06:49 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:06:49 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:06:49 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:06:51 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:06:51 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:06:51 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:06:51 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:07:26 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:07:26 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:07:30 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:07:30 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:07:54 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:07:54 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:07:57 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:07:57 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:08:29 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:08:29 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:08:33 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:08:33 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:08:54 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:08:54 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:08:58 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:08:58 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:08:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:08:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:18:15 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:18:15 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:20:06 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:20:06 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:20:10 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:20:10 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:20:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:20:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:20:34 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:20:34 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:20:38 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:20:38 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:20:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:20:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:21:00 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:21:00 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:21:03 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:21:03 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:21:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:21:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:21:27 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:21:27 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:21:30 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:21:30 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:21:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:21:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:21:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:21:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:21:49 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:21:49 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:21:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:21:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:22:11 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:22:11 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:22:16 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:22:16 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:23:21 --- ERROR: ErrorException [ 1 ]: Call to undefined function strip_tag() ~ APPPATH/views/scripts/article/article.php [ 30 ]
2012-09-09 14:23:21 --- STRACE: ErrorException [ 1 ]: Call to undefined function strip_tag() ~ APPPATH/views/scripts/article/article.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-09 14:23:43 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:23:43 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:23:47 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:23:47 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:24:15 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:24:15 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:24:19 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:24:19 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:24:48 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:24:48 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:24:51 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:24:51 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:24:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:24:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:25:11 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:25:11 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:25:15 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:25:15 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:25:31 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:25:31 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:25:35 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:25:35 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:27:26 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:27:26 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:27:30 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:27:30 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:27:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:27:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:38:54 --- ERROR: ErrorException [ 2 ]: mb_substr() expects at least 2 parameters, 1 given ~ APPPATH/views/scripts/article/article.php [ 24 ]
2012-09-09 14:38:54 --- STRACE: ErrorException [ 2 ]: mb_substr() expects at least 2 parameters, 1 given ~ APPPATH/views/scripts/article/article.php [ 24 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mb_substr() exp...', '/var/www/public...', 24, Array)
#1 /var/www/public_html/travel.com/application/views/scripts/article/article.php(24): mb_substr('???????????????...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#4 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/public_html/travel.com/application/views/layouts/common.php(83): Kohana_View->__toString()
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#8 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Articles))
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#14 {main}
2012-09-09 14:39:17 --- ERROR: ErrorException [ 2 ]: mb_substr() expects at least 2 parameters, 1 given ~ APPPATH/views/scripts/article/article.php [ 24 ]
2012-09-09 14:39:17 --- STRACE: ErrorException [ 2 ]: mb_substr() expects at least 2 parameters, 1 given ~ APPPATH/views/scripts/article/article.php [ 24 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mb_substr() exp...', '/var/www/public...', 24, Array)
#1 /var/www/public_html/travel.com/application/views/scripts/article/article.php(24): mb_substr('???????????????...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#4 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/public_html/travel.com/application/views/layouts/common.php(83): Kohana_View->__toString()
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#8 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Articles))
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#14 {main}
2012-09-09 14:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:43:22 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:43:22 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:43:26 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:43:26 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:45:26 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:45:26 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:45:29 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:45:29 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:45:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:45:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:45:49 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 14:45:49 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 14:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/oiuytr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 14:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/oiuytr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 14:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:52:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH/views/scripts/article/onearticle.php [ 14 ]
2012-09-09 14:52:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: value ~ APPPATH/views/scripts/article/onearticle.php [ 14 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/article/onearticle.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 14, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/common.php(83): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Articles))
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-09 14:53:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:53:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:53:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:53:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 14:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/xcvxvxcvxc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 14:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/xcvxvxcvxc was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 14:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 14:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:15:12 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 15:15:12 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 15:15:16 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 15:15:16 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 15:15:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:15:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:15:47 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 15:15:47 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 15:15:50 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 15:15:50 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 15:15:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:15:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:17:25 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 15:17:25 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 15:17:29 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 15:17:29 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 15:17:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:17:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:17:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:17:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:18:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:18:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:19:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:19:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:20:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:20:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:22:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:22:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:22:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:22:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:23:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:23:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:50:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:50:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:50:15 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 15:50:15 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 15:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 15:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 15:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/hrenoten was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 15:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/hrenoten was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 16:22:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/hrenoten was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 16:22:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/hrenoten was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 16:24:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 16:24:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 16:29:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 16:29:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 16:34:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 16:34:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 16:43:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 16:43:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 16:43:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 16:43:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 16:43:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 16:43:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 16:43:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/hrenoten was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 16:43:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/hrenoten was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 16:43:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-09 16:43:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 17:27:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:27:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 17:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/hrenoten was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 17:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/hrenoten was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 17:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/index.php/hrenoten ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: articles/index.php/hrenoten ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 17:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 17:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 17:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:03:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:03:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:03:37 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 18:03:37 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 18:03:41 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 18:03:41 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 18:03:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:03:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:04:39 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 18:04:39 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 18:04:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 18:04:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 18:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:05:30 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 18:05:30 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 18:05:34 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 18:05:34 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 18:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:09:01 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 18:09:01 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 18:09:06 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 18:09:06 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 18:09:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:09:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:10:40 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 18:10:40 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 18:10:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 18:10:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 18:10:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:10:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:10:51 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 18:10:51 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 18:10:55 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 18:10:55 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 18:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:11:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/oiuytr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 18:11:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/oiuytr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 18:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:11:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:11:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:12:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:12:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:12:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:12:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:12:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:12:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:12:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:12:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:12:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:12:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:14:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:14:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:15:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:15:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:15:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:15:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:15:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:15:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:15:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:15:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:15:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:15:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:16:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:16:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:19:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:19:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:20:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:20:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:22:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:22:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:28:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:28:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:34:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:34:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:38:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:38:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:40:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:40:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:50:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:50:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:56:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:56:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:58:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:58:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 18:58:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 18:58:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:01:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:01:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:01:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:01:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:11:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:11:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:13:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:13:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:19:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:19:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:19:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:19:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:19:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:19:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:28:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:28:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:32:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:32:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:36:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:36:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:46:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:46:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:49:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:49:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 19:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 19:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:03:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH/views/scripts/article/onearticle.php [ 90 ]
2012-09-09 20:03:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH/views/scripts/article/onearticle.php [ 90 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/article/onearticle.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 90, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/common.php(91): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Articles))
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-09 20:06:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH/views/scripts/article/onearticle.php [ 90 ]
2012-09-09 20:06:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH/views/scripts/article/onearticle.php [ 90 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/article/onearticle.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 90, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/common.php(91): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Articles))
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-09 20:07:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH/views/scripts/article/onearticle.php [ 90 ]
2012-09-09 20:07:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH/views/scripts/article/onearticle.php [ 90 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/article/onearticle.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 90, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/common.php(91): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Articles))
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-09 20:08:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH/views/scripts/article/onearticle.php [ 90 ]
2012-09-09 20:08:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH/views/scripts/article/onearticle.php [ 90 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/article/onearticle.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/public...', 90, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/common.php(91): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Articles))
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-09 20:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:15:37 --- ERROR: ErrorException [ 8 ]: Undefined index: style ~ MODPATH/captcha/classes/captcha.php [ 79 ]
2012-09-09 20:15:37 --- STRACE: ErrorException [ 8 ]: Undefined index: style ~ MODPATH/captcha/classes/captcha.php [ 79 ]
--
#0 /var/www/public_html/travel.com/modules/captcha/classes/captcha.php(79): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 79, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/articles.php(81): Captcha::instance('riddles')
#2 [internal function]: Controller_Articles->action_index()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Articles))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-09 20:28:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:28:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:33:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:33:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:35:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:35:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:35:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:35:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:35:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:35:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:36:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:36:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:36:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:36:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 20:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/newcomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 20:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/newcomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 20:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/newcomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 20:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/newcomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 20:37:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 20:37:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:26:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:26:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:26:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/newcomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 21:26:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/newcomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 21:27:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:27:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:27:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:27:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:27:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/newcomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 21:27:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/newcomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 21:28:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:28:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:28:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:28:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:31:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:31:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:31:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:31:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:31:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:31:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/newcomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 21:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/newcomment was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 21:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/index.php/newcomment ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/index.php/newcomment ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:46:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:46:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:46:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:46:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:47:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:47:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:47:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:47:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 21:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 21:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:24:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:24:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:24:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:24:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL newcomment/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 22:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL newcomment/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 22:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL newcomment/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 22:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL newcomment/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 22:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL newcomment/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 22:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL newcomment/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 22:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL newcomment/index/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 22:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL newcomment/index/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 22:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:26:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:26:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:26:20 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-09-09 22:26:20 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/articles.php(57): Kohana_View->__get('content')
#1 [internal function]: Controller_Articles->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Articles))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-09 22:26:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:26:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:26:28 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-09-09 22:26:28 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/articles.php(57): Kohana_View->__get('content')
#1 [internal function]: Controller_Articles->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Articles))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-09 22:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:26:29 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-09-09 22:26:29 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/articles.php(57): Kohana_View->__get('content')
#1 [internal function]: Controller_Articles->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Articles))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-09 22:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:26:30 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-09-09 22:26:30 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/articles.php(57): Kohana_View->__get('content')
#1 [internal function]: Controller_Articles->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Articles))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-09 22:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL newcomment/index/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 22:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL newcomment/index/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 22:27:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL newcomment/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 22:27:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL newcomment/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 22:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newcomment/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: newcomment/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:27:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:27:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:28:04 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-09-09 22:28:04 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/articles.php(57): Kohana_View->__get('content')
#1 [internal function]: Controller_Articles->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Articles))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-09 22:28:10 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-09-09 22:28:10 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/public_html/travel.com/application/classes/controller/articles.php(57): Kohana_View->__get('content')
#1 [internal function]: Controller_Articles->action_index()
#2 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Articles))
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-09 22:28:56 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:28:56 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:29:00 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:29:00 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:29:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:29:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:29:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:29:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:29:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vicidial/project_auth_entries.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:29:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vicidial/project_auth_entries.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:30:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/hrenoten was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 22:30:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/hrenoten was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 22:30:16 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:30:16 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:30:20 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:30:20 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:30:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:30:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:35:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:35:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:35:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:35:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:35:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:35:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:35:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:35:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:36:40 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:36:40 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:36:40 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:36:40 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:36:40 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:36:40 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:36:40 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:36:40 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:36:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:36:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:36:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:36:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:36:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:36:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:36:45 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:36:45 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:36:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/jquery.fileupload-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:36:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/jquery.fileupload-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/jquery.fileupload-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/jquery.fileupload-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:37:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/jquery.fileupload-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:37:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/jquery.fileupload-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/jquery.fileupload-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/jquery.fileupload-ui.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:49:01 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:49:01 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:49:05 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
2012-09-09 22:49:05 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT/upload ~ MODPATH/image/classes/kohana/image.php [ 106 ]
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
2012-09-09 22:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:49:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/oiuytr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-09 22:49:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/oiuytr was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-09 22:49:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:49:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/coda.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-09 22:49:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-09 22:49:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax/getcontent/5 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}