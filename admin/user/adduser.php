<?php 

//start session 
session_start(); 

//kiem tra da dang nhap chua


//require 
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/user.php';

if($_POST) {
$data = array ( 
'username' => $_POST['username'],
'password' => md5($_POST['password']),
'name'     => $_POST['name'],
'checkbox' => isset($_POST['checkbox']) ? 1 : 0,
'email'    => $_POST['email']
);
 
     
//add
if(add_userweb($data)){

$SESSION['success'] = true;
    
header('location:..\..\templates\front\register.php');
    
}
}


?>