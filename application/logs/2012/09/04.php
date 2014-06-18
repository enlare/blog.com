<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-04 11:47:12 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2012-09-04 11:47:12 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 102, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/menu.php(82): Kohana_Validation->offsetGet('title')
#2 [internal function]: Controller_Admin_Menu->action_newmenu()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-04 12:40:11 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ SYSPATH/classes/kohana/validation.php [ 102 ]
2012-09-04 12:40:11 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ SYSPATH/classes/kohana/validation.php [ 102 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/public...', 102, Array)
#1 /var/www/public_html/travel.com/application/classes/controller/admin/menu.php(80): Kohana_Validation->offsetGet('title')
#2 [internal function]: Controller_Admin_Menu->action_newmenu()
#3 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#4 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-04 12:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-datepicker.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 12:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-datepicker.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 12:46:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-position.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 12:46:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-position.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 12:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 12:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 12:47:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-sortable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 12:47:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-sortable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 12:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-sortable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 12:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-sortable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 12:53:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 12:53:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 13:05:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-sortable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 13:05:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-sortable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 13:11:29 --- ERROR: Kohana_Exception [ 0 ]: The title_main property does not exist in the Model_Menus class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-04 13:11:29 --- STRACE: Kohana_Exception [ 0 ]: The title_main property does not exist in the Model_Menus class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/admin/manage/menu.php(124): Kohana_ORM->__get('title_main')
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/administrator.php(51): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /var/www/public_html/travel.com/system/classes/kohana/response.php(160): Kohana_View->__toString()
#9 /var/www/public_html/travel.com/application/classes/controller/admin/menu.php(65): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Menu->action_index()
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Menu))
#12 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#15 {main}
2012-09-04 15:52:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-04 15:52:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 15:53:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 15:53:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 15:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 15:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 15:53:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 15:53:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 15:53:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 15:53:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 15:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 15:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 15:55:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 15:55:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 15:55:24 --- ERROR: Kohana_Exception [ 0 ]: The title_main property does not exist in the Model_Menus class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-09-04 15:55:24 --- STRACE: Kohana_Exception [ 0 ]: The title_main property does not exist in the Model_Menus class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/public_html/travel.com/application/views/layouts/common.php(39): Kohana_ORM->__get('title_main')
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#6 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-04 23:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-04 23:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-04 23:58:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-04 23:58:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-04 23:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-04 23:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}