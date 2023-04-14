<?php
function index(){
    include_once('config/connect.php');
    $sql = "SELECT * FROM order";
    $record = mysqli_query($connect, $sql);
    include_once('config/close_connect.php');
    return $record;
}
function store(){
    include_once('config/connect.php');
    $cus_id = $_POST['cus_id'];
    $adm_id = $_POST['adm_id'];
    $create_date = $_POST['create_date'];
    $total_price_order = $_POST['atotal_price_order'];
    $receiver_first_name = $_POST['receiver_first_name']; 
    $receiver_last_name = $_POST['receiver_last_name'];
    $receiver_address = $_POST['receiver_address'];
    $receiver_phone = $_POST['receiver_phone'];
    $status = $_POST['status'];
    $sql = "INSERT INTO order(cus_id, adm_id, acreate_date, total_price_order, receiver_first_name,receiver_last_name,receiver_address,receiver_phone,status)
            VALUES ('$cus_id','$adm_id','$acreate_date','$total_price_order','$receiver_first_name', '$receiver_last_name', '$receiver_address','$receiver_phone','$status')";
    $record = mysqli_query($connect,$sql);
    include_once('config/close_connect.php');
    return $record;
}


/*Trả về index cho controller */
switch($action){
    case '': $record = index(); break;
    case 'store': store(); break;
}
?>