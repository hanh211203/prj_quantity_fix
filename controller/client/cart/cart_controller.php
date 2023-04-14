<?php
require_once('model/client/index_model.php');
switch(){
    case '':
        require_once('model/client/index_model.php');
        require_once('model/client/cart/cart_model.php');
        require_once('views/client/cart.php');
        break;
    case 'add':
        require_once('model/client/cart/cart_model.php');
        header(Location:'index.php?redirect=cart');
        break;
    case 'del':
        require_once('model/client/cart/cart_model.php');
        header('Location: index.php?redirect=cart');
        break;
}
?>