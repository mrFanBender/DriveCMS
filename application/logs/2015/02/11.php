<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-11 23:32:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\Main.php [ 40 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php:40
2015-02-11 23:32:44 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\programs\Eas...', 40, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#7 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php:40
2015-02-11 23:34:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\Main.php [ 40 ] in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php:40
2015-02-11 23:34:26 --- DEBUG: #0 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'L:\programs\Eas...', 40, Array)
#1 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#7 {main} in L:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php:40
2015-02-11 23:57:33 --- CRITICAL: ErrorException [ 1 ]: Class 'ModuleManager' not found ~ APPPATH\classes\Controller\Main.php [ 26 ] in file:line
2015-02-11 23:57:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line