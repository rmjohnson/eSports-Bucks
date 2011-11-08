<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-07 22:39:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-07 22:39:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-07 22:41:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\home.php [ 9 ]
2011-11-07 22:41:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\home.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-07 22:41:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-07 22:41:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-07 22:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-11-07 22:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Ryan\Documents\projects\esportsbucks\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Ryan\Documents\projects\esportsbucks\index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-07 22:41:53 --- ERROR: ErrorException [ 1 ]: Class 'Controller_ESB' not found ~ APPPATH\classes\controller\home.php [ 3 ]
2011-11-07 22:41:53 --- STRACE: ErrorException [ 1 ]: Class 'Controller_ESB' not found ~ APPPATH\classes\controller\home.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}