<?php
session_start();

if(!isset($_SESSION['user'])){
    $_SESSION['success']= true; 
    header('location:../user/login.php');
}
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';
require '../../models/product.php';

$product_id = $_GET['id'];

if($_POST){
if($image = $_FILE['image']['name'] != null){
    move_uploaded_file($_FILE['image']['tmp_name'],'userfile/' .$image);
}  else{
    $image = null;
}
    $data = array(
    'category_id' => $_POST['category_id'],
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'detail' => $_POST['detail'],
    'size' => $_POST['size'],   
    'size1' => $_POST['size1'],  
    'size2' => $_POST['size2'],  
    'longdetail' => $_POST['longdetail'],   
    'quantity' => $_POST['quantity'],      
    'image' => $image, 
    'status' => isset($_POST['status']) ?1:0
    );
if(edit_product($data,$product_id)){
    $_SESSION['success'] = true;
    header('location:edit.php?id='.$product_id);
}  
}
//lay thong tin product de show tren form
$product = get_product_by_id($product_id);

$category_active_list = get_category_active_list();

require '../../views/admin/product/edit.tpl.php';
?>