<?php
//Start session
session_start();

//Kiem tra neu da dang nhap thi quay ve trang chu admin
//if(isset($_SESSION['user'])){
//header('location:../home/home.php');
//}

//require

//kiem tra du lieu post len
if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
//gan tai khoan va mk nhan duoc tu form vao 2 bien duoi day
$username = $_POST['username'];
$password = $_POST['password'];

//lay thong tin  thanh vien tu DB
$user = get_user_by_username($username);

//kiem tra su ton tai cua thanh vien va mat khau co trung k
if($user && $user['password'] === md5($password)){
//tao session luu thong tin thanh vien dang nhap thanh cong
$_SESSION['user'] = $user;

//quay ve trang admin
header('location:\welcome.php');
}else{
$error = true;
}
}

//require file giao dien (view)


?>
