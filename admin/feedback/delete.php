<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location:../user/login.php');
    
}
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/feedback.php';

$feedback_id = $_GET['feedback_id'];
delete_feedback($feedback_id);
header('location:list.php');
?>