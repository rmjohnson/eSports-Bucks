<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-08 14:11:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\home.php [ 17 ]
2011-11-08 14:11:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\home.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-08 14:19:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\home.php [ 32 ]
2011-11-08 14:19:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\home.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-08 14:19:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\home.php [ 32 ]
2011-11-08 14:19:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\home.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-08 14:23:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\home.php [ 22 ]
2011-11-08 14:23:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\home.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-08 14:23:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\home.php [ 22 ]
2011-11-08 14:23:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\home.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-08 14:23:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\home.php [ 38 ]
2011-11-08 14:23:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\home.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-08 14:23:53 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 14:23:53 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 14:27:06 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 14:27:06 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 14:27:31 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 14:27:31 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 14:28:03 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 14:28:03 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 14:43:17 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 14:43:17 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 14:43:28 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 14:43:28 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 14:49:38 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 14:49:38 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 14:50:19 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 14:50:19 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 14:59:46 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 14:59:46 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 15:01:02 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 15:01:02 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 15:02:23 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 15:02:23 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 15:04:38 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 15:04:38 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 15:04:50 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 15:04:50 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 15:07:03 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2011-11-08 15:07:03 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(15): Kohana_Auth->hash('poop')
#1 [internal function]: Controller_Home->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 15:21:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\home.php [ 16 ]
2011-11-08 15:21:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\home.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-08 15:22:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\home.php [ 39 ]
2011-11-08 15:22:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\home.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-08 15:22:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\home.php [ 39 ]
2011-11-08 15:22:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\home.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-08 15:22:34 --- ERROR: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-11-08 15:22:34 --- STRACE: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\Users\Ryan\Documents\projects\esportsbucks\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\home.php(32): Kohana_ORM->add('roles', Object(Model_Role))
#3 [internal function]: Controller_Home->action_index()
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-08 17:22:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-08 17:22:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-08 17:22:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::params() ~ APPPATH\classes\controller\player.php [ 10 ]
2011-11-08 17:22:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::params() ~ APPPATH\classes\controller\player.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-08 17:23:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\player.php [ 1 ]
2011-11-08 17:23:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\player.php [ 1 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\views\player.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Ryan\D...', 1, Array)
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\view.php(61): include('C:\Users\Ryan\D...')
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Ryan\D...', Array)
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Users\Ryan\Documents\projects\esportsbucks\application\views\template.php(9): Kohana_View->__toString()
#5 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\view.php(61): include('C:\Users\Ryan\D...')
#6 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Ryan\D...', Array)
#7 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Player))
#10 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#13 {main}
2011-11-08 17:24:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '(' ~ APPPATH\views\player.php [ 11 ]
2011-11-08 17:24:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '(' ~ APPPATH\views\player.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-08 17:24:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-08 17:24:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-08 17:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL player/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-08 17:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL player/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-08 17:31:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\classes\controller\communitylogo.php [ 10 ]
2011-11-08 17:31:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\classes\controller\communitylogo.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-08 17:31:39 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\communitylogo.php [ 8 ]
2011-11-08 17:31:39 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\communitylogo.php [ 8 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\communitylogo.php(8): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\Users\Ryan\D...', 8, Array)
#1 [internal function]: Controller_CommunityLogo->action_view()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CommunityLogo))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 17:32:36 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\communitylogo.php [ 10 ]
2011-11-08 17:32:36 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\communitylogo.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\Users\Ryan\D...', 10, Array)
#1 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\communitylogo.php(10): imagecreatefromstring('Array')
#2 [internal function]: Controller_CommunityLogo->action_view()
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CommunityLogo))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-08 17:32:45 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\communitylogo.php [ 10 ]
2011-11-08 17:32:45 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\communitylogo.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\Users\Ryan\D...', 10, Array)
#1 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\communitylogo.php(10): imagecreatefromstring('Array')
#2 [internal function]: Controller_CommunityLogo->action_view()
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_CommunityLogo))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-08 17:32:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 9 ]
2011-11-08 17:32:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 9 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\views\template.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Ryan\D...', 9, Array)
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\view.php(61): include('C:\Users\Ryan\D...')
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Ryan\D...', Array)
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_CommunityLogo))
#6 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-08 17:49:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 17:49:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 17:49:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 17:49:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 17:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 17:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 17:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 17:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 17:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 17:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 17:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-08 17:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-08 17:49:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 17:49:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 17:50:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 17:50:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 17:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 17:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 17:56:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-08 17:56:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-08 17:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 17:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 17:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 17:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 17:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 17:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 17:56:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 17:56:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 17:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-08 17:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-08 17:57:18 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 60 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-11-08 17:57:18 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 60 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\Users\Ryan\D...', 392, Array)
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\route.php(392): preg_match('#^(?:(?P<contro...', 'favicon.ico', NULL)
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(567): Kohana_Route->matches('favicon.ico')
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(785): Kohana_Request::process_uri('favicon.ico', Array)
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(198): Kohana_Request->__construct('/favicon.ico', NULL)
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(108): Kohana_Request::factory()
#6 {main}
2011-11-08 17:57:22 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 60 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-11-08 17:57:22 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 60 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\Users\Ryan\D...', 392, Array)
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\route.php(392): preg_match('#^(?:(?P<contro...', 'favicon.ico', NULL)
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(567): Kohana_Route->matches('favicon.ico')
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(785): Kohana_Request::process_uri('favicon.ico', Array)
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(198): Kohana_Request->__construct('/favicon.ico', NULL)
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(108): Kohana_Request::factory()
#6 {main}
2011-11-08 17:57:25 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 60 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-11-08 17:57:25 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 60 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\Users\Ryan\D...', 392, Array)
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\route.php(392): preg_match('#^(?:(?P<contro...', 'favicon.ico', NULL)
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(567): Kohana_Route->matches('favicon.ico')
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(785): Kohana_Request::process_uri('favicon.ico', Array)
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(198): Kohana_Request->__construct('/favicon.ico', NULL)
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(108): Kohana_Request::factory()
#6 {main}
2011-11-08 17:57:25 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 60 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2011-11-08 17:57:25 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 60 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\Users\Ryan\D...', 392, Array)
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\route.php(392): preg_match('#^(?:(?P<contro...', 'favicon.ico', NULL)
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(567): Kohana_Route->matches('favicon.ico')
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(785): Kohana_Request::process_uri('favicon.ico', Array)
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(198): Kohana_Request->__construct('/favicon.ico', NULL)
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(108): Kohana_Request::factory()
#6 {main}
2011-11-08 18:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-08 18:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-08 18:00:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:00:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:00:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:00:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:00:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Player::$id ~ APPPATH\classes\controller\player.php [ 10 ]
2011-11-08 18:00:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Player::$id ~ APPPATH\classes\controller\player.php [ 10 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\application\classes\controller\player.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\Users\Ryan\D...', 10, Array)
#1 [internal function]: Controller_Player->action_index()
#2 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Player))
#3 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-08 18:00:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:00:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:00:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\player.php [ 25 ]
2011-11-08 18:00:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\player.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-08 18:00:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:00:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-08 18:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-08 18:42:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:42:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:42:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:42:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:42:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:42:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:42:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:42:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-11-08 18:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL player/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-08 18:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:42:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:42:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-08 18:43:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-08 18:43:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#1 {main}