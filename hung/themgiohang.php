<?php
session_start();
ob_start();
$id = $_GET['id'];
if ($id!= "") 
{
        if (isset($_SESSION['giohang'][$id])) 
		{
            $_SESSION['giohang'][$id]++;//neu session nay da ton tai thi tang len 1 
        } 
		else 
		{
            $_SESSION['giohang'][$id] = 1;
        }
        header("location:giohang.php");
}
else 
{
       header("location:index.php");//quay lai trang san pham 
} 
?> 