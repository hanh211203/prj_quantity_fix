<?php
function index(){
    include_once('config/connect.php');
    $sql_prd = "SELECT * FROM product INNER JOIN category ON category.cat_id = product.cat_id";
    $query_prd = mysqli_query($connect, $sql_prd);
    $sql_cate = "SELECT * FROM category";
    $query_cate = mysqli_query($connect, $sql_cate);  
    include_once('config/close_connect.php');
    $arr = array();
    $arr['category'] = $query_cate;
    $arr['product'] = $query_prd;
    return $arr;
}
function create(){
    include_once('config/connect.php');
    $sql = "SELECT * FROM category ORDER BY cat_id DESC";
    $record = mysqli_query($connect, $sql);
    include_once('config/close_connect.php');
    return $record;
}
function store(){
    include_once('config/connect.php');
    $prd_name = $_POST['prd_name']; 
    $cat_id= $_POST['cat_id'];
    $image = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];
    $uses = $_POST['uses'];
    $recommended_use= $_POST['recommended_use'];
    $expiry = $_POST['expiry'];
    $quantity = $_POST['quantity'];
    $sql = "INSERT INTO product (cat_id,prd_name,image,weight,price,uses,recommended_use,expiry,quantity)
            VALUES ($cat_id,'$prd_name','$image','$weight',$price,'$uses','$recommended_use',$expiry,$quantity)";
    mysqli_query($connect,$sql);
    move_uploaded_file($file_tmp,'public/images/'.$image);
    include_once('config/close_connect.php');
}
function edit(){
    $prd_id = $_GET['prd_id'];
    include_once('config/connect.php');
    $sql_prd = "SELECT * FROM product WHERE prd_id = '$prd_id'";
    $query_prd = mysqli_query($connect, $sql_prd);
    $sql_cate = "SELECT * FROM category";
    $query_cate = mysqli_query($connect, $sql_cate);
    $arr = array();
    $arr['category'] = $query_cate;
    $arr['product'] = $query_prd;
    include_once('config/close_connect.php');
    return $arr;
}
function update(){
    include_once('config/connect.php');
    $prd_id = $_POST['prd_id'];
    $prd_name = $_POST['prd_name']; 
    $cat_id= $_POST['cat_id'];
    $arr =mysqli_fetch_array(mysqli_query($connect,"SELECT image FROM product WHERE prd_id='$prd_id' "));
    if($_FILES['image']['name']==''){
        $image = $arr['image'];
    }else{
        $image = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($file_tmp,'public/images/'.$image);
    } 
    $weight = $_POST['weight'];
    $price = $_POST['price'];
    $uses = $_POST['uses'];
    $recommended_use= $_POST['recommended_use'];
    $expiry = $_POST['expiry'];
    $quantity = $_POST['quantity'];
    $sql = "UPDATE product SET 
                cat_id = $cat_id,
                prd_name = '$prd_name',
                image = '$image',
                weight ='$weight',
                price = $price,
                uses = '$uses',
                recommended_use = '$recommended_use',
                expiry = $expiry,
                quantity = $quantity
           WHERE prd_id = '$prd_id'";
    mysqli_query($connect,$sql);
    // move_uploaded_file($file_tmp,'public/images/'.$image);
    include_once('config/close_connect.php');
}
function destroy(){
    $prd_id = $_GET['prd_id'];
    include_once('config/connect.php');
    $query = mysqli_query($connect, "DELETE FROM product WHERE prd_id='$prd_id'");
    include_once('config/close_connect.php');
}
switch($action){
    case '': $arr= index(); break;
    case 'store': store(); break;
    case 'edit': $arr = edit(); break;
    case 'update':update();break;
    case 'destroy':destroy();break;
    case 'create':$record = create(); break;
}
?>