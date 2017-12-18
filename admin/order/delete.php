<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
    
}
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/order.php';

$order_id = $_GET['SOHD'];
delete_order($order_id);
header('location:list.php');
?>