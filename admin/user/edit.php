<?php 
session_start();

if(!isset($_SESSION['user'])){
    header('location:login.php');
}

require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/user.php';

$user_id = $_GET['id'];

if($_POST){ 
$data = array( 
'username' => $_POST['username'], 
'password' => empty($_POST['password']) ? null : md5($_POST['password']),
'name'     => $_POST['name'],
'status'   => $_POST['status'] ?1:0, 
'email'    => $_POST['email'],
'phone'    => $_POST['phone']
);   


if (edit_user($data,$user_id)){
 $_SESSION['success'] = true;

header('location:edit.php?id='.$user_id);
}
}
$user = get_user_by_id($user_id);

require '../../views/admin/edit.tpl.php';


  
    
    
    

?>