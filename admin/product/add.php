<?php 
session_start();

if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';
require '../../models/product.php';

If($_POST){
//Upload hình ảnh
if(($image = $_FILES['image']['name']) != null){
move_uploaded_file($_FILES['image']['tmp_name'], 'userfiles/' . $image);
}else{
$image = '';
} 

$data = array(
'category_id' => $_POST['category_id'],
'name'      => $_POST['name'],
'price' => $_POST['price'],
'detail' => $_POST['detail'],
'size' => $_POST['size'],   
'size1' => $_POST['size1'],   
'size2' => $_POST['size2'],   
'longdetail' => $_POST['longdetail'],  
'quantity' => $_POST['quantity'],      
'image' => $image,
'status' => isset($_POST['status']) ? 1 : 0
); 
if (add_product($data)){
    $_SESSION['success'] = true; 
    header('location:add.php');
}
}
$category_active_list = get_category_active_list();

//Require file giao diện (View)
require '../../views/admin/product/add.tpl.php';
?>