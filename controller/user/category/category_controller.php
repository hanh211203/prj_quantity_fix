<?php
    switch($action){
        case '':
            require_once('model/user/category/category_model.php');
            require_once('views/user/category/main.php');
            ;break;
        case 'create': 
            require_once('views/user/category/add.php');//Mới chỉ gọi đến giao diện
            ;break;
        case 'store':
            require_once('model/user/category/category_model.php');
            header('location: index.php?controller=user&redirect=category');
            ;break;
        case 'edit':
            require_once('model/user/category/category_model.php');
            require_once('views/user/category/edit.php');
            ;break;
        case 'update':
            require_once('model/user/category/category_model.php');
            header('location: index.php?controller=user&redirect=category');
            ;break;   
        case 'destroy':
            require_once('model/user/category/category_model.php');
            header('location: index.php?controller=user&redirect=category');
            ; break;
    }
?>