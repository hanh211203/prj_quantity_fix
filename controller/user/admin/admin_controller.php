<?php
switch($action){
    case '': 
        require_once('model/user/admin/admin_model.php');
        require_once('views/user/admin/main.php');
        ;break;
    case 'create': 
        require_once('views/user/admin/add.php');//Mới chỉ gọi đến giao diện
        ;break;
    case 'store':
        require_once('model/user/admin/admin_model.php');
        header('location: ?controller=user&redirect=admin');
        ; break;
    case 'edit':
        require_once('model/user/admin/admin_model.php');
        require_once('views/user/admin/edit.php');
        ;break;
    case 'update':
        require_once('model/user/admin/admin_model.php');
        header('location: ?controller=user&redirect=admin');
        ; break;
    case 'destroy':
        require_once('model/user/admin/admin_model.php');
        header('location: ?controller=user&redirect=admin');
        ; break;

}
?>