<?php
function index(){
include_once('config/connect.php');
$sqlAllProduct = "SELECT COUNT(*) FROM product";
$queryAllProduct = mysqli_query($connect, $sqlAllProduct);
// $Product = mysqli_num_rows($queryAllProduct);

$sqlAllAdmin = "SELECT adm_id FROM admin";
$queryAllAdmin = mysqli_query($connect, $sqlAllAdmin);
// $Admin = mysqli_num_rows($queryAllAdmin);

$sqlAllCustomer = "SELECT cus_id FROM customer";
$queryAllCustomer = mysqli_query($connect, $sqlAllCustomer);
// $Customer = mysqli_num_rows($queryAllCustomer);

$sqlAllCategory = "SELECT cat_id FROM category";
$queryAllCategory = mysqli_query($connect, $sqlAllCategory);
// $Category = mysqli_num_rows($queryAllCategory);

$arr = array();
$arr['product'] = $queryAllProduct;
$arr['category'] = $Category;
$arr['admin'] = $Admin;
$arr['customer'] = $Customer;
return $arr;
include_once('config/close_connect.php');

}
switch($action){
    case'': $arr = index(); break;

}
?>