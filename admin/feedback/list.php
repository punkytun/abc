<?php
session_start();

if(!isset($_SESSION['user'])){
header('location:../user/login.php');
}
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/feedback.php';

$feedback_list = get_feedback_list(); 

require '../../views/admin/feedback/list.tpl.php'
    
?>