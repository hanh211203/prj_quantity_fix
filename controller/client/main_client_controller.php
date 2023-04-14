<?php
$redirect = $_GET['redirect']??'';

if($redirect == ''){
    require_once('model/client/index_model.php');
    require_once('views/client/interface.php');
}else{
    switch($redirect){
        case 'product':
            require_once('model/client/index_model.php');
            require_once('views/client/interface.php');
            require_once('views/client/product.php');
            ;break;
        case 'cart':
            require_once('controller/client/cart/cart_controller.php');
            require_once('views/client/cart.php');
            ;break;
    }
}
?>