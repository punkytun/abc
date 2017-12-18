<?php
session_start();

if(!isset($_SESSION['user'])){
header('location:../user/login.php');
}
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/order.php';

$order_list = get_order_list(); 

require '../../views/admin/order/list.tpl.php'
    
?>