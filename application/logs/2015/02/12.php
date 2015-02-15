<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-12 00:05:26 --- CRITICAL: ErrorException [ 1 ]: Class 'ModuleManager' not found ~ APPPATH\classes\Controller\Main.php [ 26 ] in file:line
2015-02-12 00:05:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-12 00:17:38 --- CRITICAL: ErrorException [ 1 ]: Class 'ModuleManager' not found ~ APPPATH\classes\Controller\Main.php [ 26 ] in file:line
2015-02-12 00:17:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-12 00:18:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Modulemanager' not found ~ APPPATH\classes\Controller\Main.php [ 26 ] in file:line
2015-02-12 00:18:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-12 00:18:13 --- CRITICAL: ErrorException [ 1 ]: Class 'modulemanager' not found ~ APPPATH\classes\Controller\Main.php [ 26 ] in file:line
2015-02-12 00:18:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-12 00:19:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller::factory() ~ APPPATH\classes\Controller\Main.php [ 28 ] in file:line
2015-02-12 00:19:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-12 00:23:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Modulemanager' not found ~ APPPATH\classes\Controller\Main.php [ 26 ] in file:line
2015-02-12 00:23:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-12 00:26:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Modman2' not found ~ APPPATH\classes\Controller\Main.php [ 26 ] in file:line
2015-02-12 00:26:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-12 00:28:40 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_ModuleManager::$_tablePageModules ~ APPPATH\classes\Model\ModuleManager.php [ 11 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Model\ModuleManager.php:11
2015-02-12 00:28:40 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Model\ModuleManager.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'L:\programs\Eas...', 11, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\modman2.php(10): Model_ModuleManager->getPageModules('2')
#2 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php(26): Controller_Modman2::getPageModules('2')
#3 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#9 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Model\ModuleManager.php:11
2015-02-12 00:59:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Modulemanager::getPageModules() ~ APPPATH\classes\Controller\Main.php [ 27 ] in file:line
2015-02-12 00:59:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-12 01:50:18 --- CRITICAL: ErrorException [ 1 ]: Class 'articles' not found ~ APPPATH\classes\Controller\modulemanager.php [ 32 ] in file:line
2015-02-12 01:50:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-12 01:51:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\client.php [ 1 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php:1
2015-02-12 01:51:26 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\programs\Eas...', 1, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('L:\programs\Eas...')
#2 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('L:\programs\Eas...', Array)
#3 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\modules\articles\classes\Kohana\articles.php(18): Kohana_View->render()
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\modulemanager.php(33): Kohana_Articles->render()
#5 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php(27): Controller_Modulemanager->loadPageModules()
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#12 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php:1
2015-02-12 01:51:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\client.php [ 1 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php:1
2015-02-12 01:51:43 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\programs\Eas...', 1, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('L:\programs\Eas...')
#2 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('L:\programs\Eas...', Array)
#3 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\modules\articles\classes\Kohana\articles.php(18): Kohana_View->render()
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\modulemanager.php(33): Kohana_Articles->render()
#5 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php(27): Controller_Modulemanager->loadPageModules()
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#12 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php:1
2015-02-12 01:52:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\client.php [ 1 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php:1
2015-02-12 01:52:31 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\programs\Eas...', 1, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('L:\programs\Eas...')
#2 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('L:\programs\Eas...', Array)
#3 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\modules\articles\classes\Kohana\articles.php(18): Kohana_View->render()
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\modulemanager.php(33): Kohana_Articles->render()
#5 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php(27): Controller_Modulemanager->loadPageModules()
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#12 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php:1
2015-02-12 01:53:21 --- CRITICAL: ErrorException [ 1 ]: Class 'articles' not found ~ APPPATH\classes\Controller\modulemanager.php [ 32 ] in file:line
2015-02-12 01:53:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-12 01:53:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\client.php [ 1 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php:1
2015-02-12 01:53:36 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\programs\Eas...', 1, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('L:\programs\Eas...')
#2 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('L:\programs\Eas...', Array)
#3 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\modules\articles\classes\Kohana\articles.php(18): Kohana_View->render()
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\modulemanager.php(33): Kohana_Articles->render()
#5 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php(27): Controller_Modulemanager->loadPageModules()
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#12 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php:1
2015-02-12 01:55:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\client.php [ 1 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php:1
2015-02-12 01:55:00 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\programs\Eas...', 1, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('L:\programs\Eas...')
#2 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('L:\programs\Eas...', Array)
#3 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\modules\articles\classes\Kohana\articles.php(18): Kohana_View->render()
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\modulemanager.php(33): Kohana_Articles->render()
#5 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php(27): Controller_Modulemanager->loadPageModules()
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#12 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php:1
2015-02-12 09:12:24 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Modulemanager::getGeneralModules(), called in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php on line 43 and defined ~ APPPATH\classes\Controller\modulemanager.php [ 38 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\modulemanager.php:38
2015-02-12 09:12:24 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\modulemanager.php(38): Kohana_Core::error_handler(2, 'Missing argumen...', 'L:\programs\Eas...', 38, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php(43): Controller_Modulemanager->getGeneralModules()
#2 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#8 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\modulemanager.php:38
2015-02-12 10:04:42 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\main.php [ 26 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:26
2015-02-12 10:04:42 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php(26): Kohana_Core::error_handler(8, 'Array to string...', 'L:\programs\Eas...', 26, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('L:\programs\Eas...')
#2 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('L:\programs\Eas...', Array)
#3 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#10 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:26
2015-02-12 10:50:00 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\modulemanager.php [ 58 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\modulemanager.php:58
2015-02-12 10:50:00 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\modulemanager.php(58): Kohana_Core::error_handler(2, 'Invalid argumen...', 'L:\programs\Eas...', 58, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php(43): Controller_Modulemanager->loadGeneralModules()
#2 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#8 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\modulemanager.php:58
2015-02-12 10:51:13 --- CRITICAL: ErrorException [ 1 ]: Class 'horizontalMenu' not found ~ APPPATH\classes\Controller\modulemanager.php [ 60 ] in file:line
2015-02-12 10:51:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-12 10:52:45 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\main.php [ 26 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:26
2015-02-12 10:52:45 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php(26): Kohana_Core::error_handler(8, 'Array to string...', 'L:\programs\Eas...', 26, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('L:\programs\Eas...')
#2 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('L:\programs\Eas...', Array)
#3 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#10 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:26
2015-02-12 10:54:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: left ~ APPPATH\views\main.php [ 18 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:18
2015-02-12 10:54:48 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\programs\Eas...', 18, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('L:\programs\Eas...')
#2 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('L:\programs\Eas...', Array)
#3 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#10 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:18
2015-02-12 10:56:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\main.php [ 18 ] in file:line
2015-02-12 10:56:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-12 10:56:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: left ~ APPPATH\views\main.php [ 18 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:18
2015-02-12 10:56:43 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'L:\programs\Eas...', 18, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('L:\programs\Eas...')
#2 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('L:\programs\Eas...', Array)
#3 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#10 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:18
2015-02-12 10:58:51 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\main.php [ 15 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:15
2015-02-12 10:58:51 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php(15): Kohana_Core::error_handler(8, 'Array to string...', 'L:\programs\Eas...', 15, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('L:\programs\Eas...')
#2 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('L:\programs\Eas...', Array)
#3 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#10 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:15