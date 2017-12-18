<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';

$category_id = $_GET['id'];
if($_POST){
$data = array (
'name' => $_POST['name'],
'status' => isset($_POST['status']) ?1:0
);
//Cập nhật
if(edit_category($data, $category_id)){
//Tạo session để lưu cờ thông báo thành công
$_SESSION['success'] = true;

//Tải lại trang (Mục đích là để tải lại thông tin mới)
header('location:edit.php?id=' . $category_id);
}
}

//Lấy thông tin danh mục sản phẩm để trình bày trên form
$category = get_category_by_id($category_id);

//Require file giao diện (View)
require '../../views/admin/category/edit.tpl.php';
?>
