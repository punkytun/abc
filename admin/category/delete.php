<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
}
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/category.php';

$category_id = $_GET['id'];
delete_category($category_id);
header('location:list.php');
?>