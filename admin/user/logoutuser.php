<?php
//start session
session_start();


//destroy session
session_destroy();

//turn back to login page
header("location:../../templates/front/index.php");
?>
