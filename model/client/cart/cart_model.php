<?php
    function index(){
        $prd_id=$_GET['prd_id'];
        include_once('config/connect.php');
        $cate = mysqli_query($connect,"SELECT * FROM category ORDER BY cat_id ASC");

        $sql = "SELECT * FROM product WHERE prd_id = '$prd_id' ";
        $query = mysqli_query($connect,$sql);

        include_once('config/close_connect.php');
        if(isset($_SESSION['cart'][$prd_id])){
            $_SESSION['cart'][$prd_id]++;
        }else{
            $_SESSION['cart'][$prd_id] = 1;
        }
        $arr = array();
        $arr['category'] = $cate;
        // $arr['product'] = $query;
        $arr['product'] = $_SESSION['cart'][$prd_id];
        return $arr;
    }
    switch($redirect){
        case 'cart':
            $arr = index();break;
    }
?>