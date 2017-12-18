<?php 

//start session 
session_start(); 

//kiem tra da dang nhap chua
if (!isset($_SESSION['user'])){
    
    header("location:login.php");
}


//require 
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/user.php';
$user_id = $_GET['id'];

delete_user($user_id);

header('location:list.php');
?>