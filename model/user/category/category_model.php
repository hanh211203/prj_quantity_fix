<?php
function index(){
    include_once('config/connect.php');
    $sql = "SELECT * FROM category";
    $record = mysqli_query($connect, $sql);
    include_once('config/close_connect.php');
    return $record;
}
function store(){
    include_once('config/connect.php');
    $cat_name = $_POST['cat_name'];
    $sql = "INSERT INTO category(cat_name)
            VALUES ('$cat_name')";
    $record = mysqli_query($connect,$sql);
    include_once('config/close_connect.php');
    return $record;
}
function edit(){
    $cat_id= $_GET['cat_id'];
    include_once('config/connect.php');
    $sql = "SELECT*FROM category WHERE cat_id=$cat_id";
    $record = mysqli_query($connect, $sql);
    include_once('config/close_connect.php');
    return $record;
}
function update(){
    include_once('config/connect.php');
    $cat_id = $_POST['cat_id'];   
    $cat_name = $_POST['cat_name'];
    $sql = "UPDATE category SET cat_name='$cat_name'
            WHERE cat_id='$cat_id'";
    mysqli_query($connect,$sql);
    include_once('config/close_connect.php');
}
function destroy(){
    $cat_id = $_GET['cat_id'];
    include_once('config/connect.php');
    $query = mysqli_query($connect, "DELETE FROM category WHERE cat_id='$cat_id'");
    include_once('config/close_connect.php');
}
switch($action){
    case '': $record = index(); break;
    case 'store': store(); break;
    case 'edit': $record = edit(); break;
    case 'update': update();break;
    case 'destroy':destroy();break;
}
?>