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