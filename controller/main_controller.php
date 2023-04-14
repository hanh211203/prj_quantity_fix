<?php
    //Lấy giá trị Controller đang làm việc với Client 
    $controller = $_GET['controller'] ?? '';
    $redirect=$_GET['redirect']??'';
    //Điều khiển controller làm gì 
    $action = $_GET['action'] ?? '';
    //Gọi chức năng cho Client 
    if(!isset($_GET['controller'])) {
        require_once('controller/client/main_client_controller.php');
    }else {
        switch($controller) {
            case 'user' : require_once('controller/user/main_user_controller.php'); break;
            case 'login' : require_once('login/login_controller.php'); break;
            
            
        }
    }
 ?>