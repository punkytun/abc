<?php 
session_start();

if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';

if($_POST){
$data = array (
'name' => $_POST['name'],
'status' => isset($_POST['status']) ?1:0,
);


//Thêm mới
if(add_category($data)){
//Tạo session để lưu cờ thông báo thành công
$_SESSION['success'] = true;

//Tải lại trang (Mục đích là để reset form)
header('location:add.php');
}
}
require '../../views/admin/category/add.tpl.php';
?>