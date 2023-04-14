<?php
function checklogin(){
    include_once('config/connect.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $count = mysqli_num_rows(mysqli_query($connect,$sql));
    if($count==0){
        return 0;
    }else{
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        return 1;
    }
    include_once('config/close_connect.php');
}

switch($action){
    case 'checklogin':$check = checklogin();break;
}
?>