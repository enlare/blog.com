<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-06 00:19:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-06 00:19:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 00:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 00:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 00:22:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 00:22:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 00:22:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 00:22:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 00:28:47 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/email/init.php [ 4 ]
2012-09-06 00:28:47 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/email/init.php [ 4 ]
--
#0 /var/www/public_html/travel.com/modules/email/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/var/www/public...', 4, Array)
#1 /var/www/public_html/travel.com/modules/email/init.php(4): include()
#2 /var/www/public_html/travel.com/system/classes/kohana/core.php(565): require_once('/var/www/public...')
#3 /var/www/public_html/travel.com/application/bootstrap.php(114): Kohana_Core::modules(Array)
#4 /var/www/public_html/travel.com/index.php(102): require('/var/www/public...')
#5 {main}
2012-09-06 00:35:17 --- ERROR: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/email/init.php [ 4 ]
2012-09-06 00:35:17 --- STRACE: ErrorException [ 2 ]: include(): Filename cannot be empty ~ MODPATH/email/init.php [ 4 ]
--
#0 /var/www/public_html/travel.com/modules/email/init.php(4): Kohana_Core::error_handler(2, 'include(): File...', '/var/www/public...', 4, Array)
#1 /var/www/public_html/travel.com/modules/email/init.php(4): include()
#2 /var/www/public_html/travel.com/system/classes/kohana/core.php(565): require_once('/var/www/public...')
#3 /var/www/public_html/travel.com/application/bootstrap.php(114): Kohana_Core::modules(Array)
#4 /var/www/public_html/travel.com/index.php(102): require('/var/www/public...')
#5 {main}
2012-09-06 00:39:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contacts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-06 00:39:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contacts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 00:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contacts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-06 00:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contacts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 00:39:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contacts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-06 00:39:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contacts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 00:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contacts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-06 00:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contacts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 00:41:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL contacts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-06 00:41:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL contacts was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 00:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/travel.com/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 00:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/travel.com/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 00:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/travel.com/captcha/default ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 00:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/travel.com/captcha/default ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 00:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/travel.com/upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 00:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/travel.com/upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 00:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/travel.com/captcha/default ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 00:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/travel.com/captcha/default ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 00:41:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/travel.com/upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 00:41:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: contacts/travel.com/upload/1315761806_baikal.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 09:52:45 --- ERROR: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ SYSPATH/classes/kohana/i18n.php [ 120 ]
2012-09-06 09:52:45 --- STRACE: ErrorException [ 2 ]: array_merge(): Argument #2 is not an array ~ SYSPATH/classes/kohana/i18n.php [ 120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', '/var/www/public...', 120, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/i18n.php(120): array_merge(Array, 1)
#2 /var/www/public_html/travel.com/system/classes/kohana/i18n.php(81): Kohana_I18n::load('ru-ru')
#3 /var/www/public_html/travel.com/system/classes/kohana/i18n.php(161): Kohana_I18n::get('??????')
#4 /var/www/public_html/travel.com/application/classes/controller/contacts.php(99): __('??????')
#5 /var/www/public_html/travel.com/application/classes/controller/contacts.php(60): Controller_Contacts->validate(Array)
#6 [internal function]: Controller_Contacts->action_index()
#7 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Contacts))
#8 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-06 05:13:39 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/views/scripts/contacts.php [ 25 ]
2012-09-06 05:13:39 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/views/scripts/contacts.php [ 25 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/contacts.php(25): Kohana_Core::error_handler(8, 'Uninitialized s...', '/var/www/public...', 25, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/common.php(76): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Contacts))
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-06 05:21:06 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/views/scripts/contacts.php [ 22 ]
2012-09-06 05:21:06 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/views/scripts/contacts.php [ 22 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/contacts.php(22): Kohana_Core::error_handler(8, 'Uninitialized s...', '/var/www/public...', 22, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/common.php(76): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Contacts))
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-06 05:23:06 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/views/scripts/contacts.php [ 53 ]
2012-09-06 05:23:06 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/views/scripts/contacts.php [ 53 ]
--
#0 /var/www/public_html/travel.com/application/views/scripts/contacts.php(53): Kohana_Core::error_handler(8, 'Uninitialized s...', '/var/www/public...', 53, Array)
#1 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/public_html/travel.com/application/views/layouts/common.php(76): Kohana_View->__toString()
#5 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#7 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Contacts))
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-06 05:25:09 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in /var/www/public_html/travel.com/application/views/scripts/contacts.php on line 20 and defined ~ SYSPATH/classes/kohana/arr.php [ 275 ]
2012-09-06 05:25:09 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in /var/www/public_html/travel.com/application/views/scripts/contacts.php on line 20 and defined ~ SYSPATH/classes/kohana/arr.php [ 275 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/arr.php(275): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/public...', 275, Array)
#1 /var/www/public_html/travel.com/application/views/scripts/contacts.php(20): Kohana_Arr::get('xcxcxc')
#2 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#3 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#4 /var/www/public_html/travel.com/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /var/www/public_html/travel.com/application/views/layouts/common.php(76): Kohana_View->__toString()
#6 /var/www/public_html/travel.com/system/classes/kohana/view.php(61): include('/var/www/public...')
#7 /var/www/public_html/travel.com/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/public...', Array)
#8 /var/www/public_html/travel.com/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 /var/www/public_html/travel.com/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Contacts))
#11 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#14 {main}
2012-09-06 05:35:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 05:35:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 05:35:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/calpad.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 05:35:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/calpad.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 05:35:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/popup.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 05:35:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/popup.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 05:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/calpad.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 05:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/calpad.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 05:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 05:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 05:38:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/popup.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 05:38:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/popup.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 12:21:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 12:21:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL js/ui/development-bundle/demos/documentation/docs-draggable.html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 12:21:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 12:21:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 12:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 12:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 12:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 12:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 12:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/calpad.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 12:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/calpad.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 12:21:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 12:21:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 12:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 12:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 12:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 12:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 12:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 12:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 12:38:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 12:38:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 12:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 12:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 12:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 12:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 13:22:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 13:22:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 13:33:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 13:33:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 13:34:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 13:34:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 13:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 13:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 13:45:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 13:45:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 13:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 13:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 13:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 13:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 13:54:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 13:54:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 14:20:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 14:20:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 14:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL sss was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 14:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL sss was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-06 15:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:55:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-06 15:55:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-06 15:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-09-06 15:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 15:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 15:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 15:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 16:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-06 16:10:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/events/getevent was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/public_html/travel.com/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/public_html/travel.com/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-06 16:10:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 16:10:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-06 16:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-09-06 16:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: img/cells.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/public_html/travel.com/index.php(109): Kohana_Request->execute()
#1 {main}