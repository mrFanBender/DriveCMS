<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-09 00:45:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$content' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Main.php [ 5 ] in file:line
2015-02-09 00:45:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 00:46:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\main.php [ 7 ] in F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:7
2015-02-09 00:46:43 --- DEBUG: #0 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\programs\Eas...', 7, Array)
#1 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('F:\programs\Eas...')
#2 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\programs\Eas...', Array)
#3 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php(25): Kohana_View->__toString()
#5 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('F:\programs\Eas...')
#6 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\programs\Eas...', Array)
#7 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#14 {main} in F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:7
2015-02-09 00:54:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Main.php [ 7 ] in file:line
2015-02-09 00:54:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 00:55:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Main.php [ 7 ] in file:line
2015-02-09 00:55:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 00:58:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Main.php [ 7 ] in file:line
2015-02-09 00:58:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 00:59:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\main.php [ 25 ] in F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:25
2015-02-09 00:59:14 --- DEBUG: #0 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\programs\Eas...', 25, Array)
#1 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('F:\programs\Eas...')
#2 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\programs\Eas...', Array)
#3 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php(25): Kohana_View->__toString()
#5 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('F:\programs\Eas...')
#6 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\programs\Eas...', Array)
#7 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#14 {main} in F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php:25
2015-02-09 01:12:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'Main' (T_STRING) ~ APPPATH\classes\Controller\admin\main.php [ 10 ] in file:line
2015-02-09 01:12:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 01:12:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'Main' (T_STRING) ~ APPPATH\classes\Controller\admin\main.php [ 10 ] in file:line
2015-02-09 01:12:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 01:13:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Admin_Common' not found ~ APPPATH\classes\Controller\admin\main.php [ 4 ] in file:line
2015-02-09 01:13:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 01:25:54 --- CRITICAL: View_Exception [ 0 ]: The requested view admin could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php:145
2015-02-09 01:25:54 --- DEBUG: #0 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(145): Kohana_View->set_filename('admin')
#1 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin', NULL)
#2 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\admin\main.php(6): Kohana_View::factory('admin')
#3 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(84): Controller_Admin_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#9 {main} in F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php:145
2015-02-09 23:40:28 --- CRITICAL: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\Model\page.php [ 9 ] in file:line
2015-02-09 23:40:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-09 23:41:07 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'drive' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\modules\database\classes\Kohana\Database\MySQL.php:75
2015-02-09 23:41:07 --- DEBUG: #0 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('drive')
#1 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\modules\database\classes\Kohana\Database\MySQL.php(431): Kohana_Database_MySQL->connect()
#2 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('about')
#3 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('about')
#4 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#5 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#6 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Model\page.php(13): Kohana_Database_Query->execute()
#7 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\classes\Controller\Main.php(9): Model_Page->getPage('about')
#8 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#14 {main} in F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\modules\database\classes\Kohana\Database\MySQL.php:75
2015-02-09 23:41:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\client.php [ 1 ] in F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php:1
2015-02-09 23:41:59 --- DEBUG: #0 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'F:\programs\Eas...', 1, Array)
#1 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('F:\programs\Eas...')
#2 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\programs\Eas...', Array)
#3 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\main.php(25): Kohana_View->__toString()
#5 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(62): include('F:\programs\Eas...')
#6 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\View.php(359): Kohana_View::capture('F:\programs\Eas...', Array)
#7 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\index.php(118): Kohana_Request->execute()
#14 {main} in F:\programs\EasyPHP-DevServer-13.1VC9\data\localweb\drive2\application\views\client.php:1