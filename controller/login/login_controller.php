<?php
$action ='';
if(isset($_GET['action'])){
    $action= $_GET['action'];
}
switch($action){
    case 'login': require_once('views/account/login.php');break;
    case 'checklogin': 
        require_once('model/login/login_model.php');
        if(isset($check)){
            header('location: index.php?controller=user');
        }else{
            $error = '<div class="alert alert-danger"> Tài khoản hoặc mật khẩu không hợp lệ!</div>';
            include_once('views/account/login.php');
        }
        ;break;
    case 'logout':
        session_destroy();
        header('location: index.php?controller=user');
        ;break;
}
?>