<?php session_start();
require_once("dbcontroller.php");
$db_handle = new DBController(); ?>
<?php
if (!isset($_SESSION['user'])){

    header("location:login.php");
}

//require
require '../../configs/config.php';
require '../../libraries/connect.php';
require '../../models/feedback.php';

if($_POST) {
$data = array (
'content'     => $_POST['content'],
);

//add
if(add_fb($data)){

$SESSION['success'] = true;


}
}

?>
