<?php 

//start session 
session_start(); 

//kiem tra da dang nhap chua
if (!isset($_SESSION['user'])){
    
    header("location:../user/login.php");
}


//require 
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/product.php';
$product_id = $_GET['id'];
delete_product($product_id);

header('location:list.php');
?>