<?php
function index(){
    include_once('config/connect.php');
    $sql_cate = "SELECT * FROM category ORDER BY cat_id ASC";
    $query_cate = mysqli_query('$connect, $sql_cate');
    $sql_prd= "SELECT * FROM product ORDER BY prd_id DESC LIMIT 6";
    $query_prd = mysqli_query('$connect,$sql_prd');
    include_once('config/close_connect.php');
    $arr = array();
    $arr['category'] = $query_cate;
    $arr['product'] = $query_prd;
    return $arr;
}
switch($redirect){
    case '': $arr = index(); break;
}
?>