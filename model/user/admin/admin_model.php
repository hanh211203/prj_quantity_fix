<?php
function index(){
    include_once('config/connect.php');
    $sql = "SELECT * FROM admin";
    $record = mysqli_query($connect, $sql);
    include_once('config/close_connect.php');
    return $record;
}
function store(){
    include_once('config/connect.php');
    $adm_first_name = $_POST['adm_first_name'];
    $adm_last_name = $_POST['adm_last_name'];
    $adm_phone = $_POST['adm_phone'];
    $adm_email = $_POST['adm_email'];
    $adm_address = $_POST['adm_address']; 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $sql = "INSERT INTO admin (adm_first_name, adm_last_name, adm_phone, adm_email, adm_address, username,password)
            VALUES ('$adm_first_name','$adm_last_name','$adm_phone','$adm_email','$adm_address','$username',$password)";
    $record = mysqli_query($connect,$sql);
    include_once('config/close_connect.php');
    return $record;
}
function edit(){
    $adm_id = $_GET['adm_id'];
    include_once('config/connect.php');
    $sql = "SELECT*FROM admin WHERE adm_id=$adm_id";
    $record = mysqli_query($connect, $sql);
    include_once('config/close_connect.php');
    return $record;
}
function update(){
    include_once('config/connect.php');
    $adm_id = $_POST['adm_id'];
    $adm_first_name = $_POST['adm_first_name'];
    $adm_last_name = $_POST['adm_last_name'];
    $adm_phone = $_POST['adm_phone'];
    $adm_email = $_POST['adm_email'];
    $adm_address = $_POST['adm_address'];
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $sql = "UPDATE admin SET 
                adm_first_name='$adm_first_name',
                adm_last_name='$adm_last_name',
                adm_phone='$adm_phone',
                adm_email='$adm_email',
                adm_address='$adm_address',
                username='$username',
                password=$password
            WHERE adm_id='$adm_id'";
    mysqli_query($connect,$sql);
    include_once('config/close_connect.php');
}
function destroy(){
    $adm_id = $_GET['adm_id'];
    include_once('config/connect.php');
    $query = mysqli_query($connect, "DELETE FROM admin WHERE adm_id='$adm_id'");
    include_once('config/close_connect.php');
}
/*Trả về index cho controller */
switch($action){
    case '': $record = index(); break;
    case 'store': store(); break;
    case 'edit': $record = edit(); break;
    case 'update':update();break;
    case 'destroy':destroy();break;
}
?>