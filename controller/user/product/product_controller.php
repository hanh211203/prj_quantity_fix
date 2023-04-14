<?php
switch($action) {
    case '' : 
        require_once('model/user/product/product_model.php');
        require_once('views/user/product/main.php');
        break;
    case 'create' : 
        require_once('model/user/product/product_model.php');//Gọi model để lấy thông tin danh mục, nhà sản xuất...
        require_once('views/user/product/add.php');
        break;
    case 'store' : 
        require_once('model/user/product/product_model.php');
        header('location: ?controller=user&redirect=product');
        break;
    case 'edit' : 
        require_once('model/user/product/product_model.php');
        require_once('views/user/product/edit.php');
        break;
    case 'update' : 
        require_once('model/user/product/product_model.php');
        header('location: ?controller=user&redirect=product');
        break;
    case 'destroy' : 
        require_once('model/user/product/product_model.php');
        header('location: ?controller=user&redirect=product');
        break;
}
?>