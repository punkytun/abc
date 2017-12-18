<?php
$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "qlbh";
$conn = mysqli_connect($SERVER, $USERNAME, $PASSWORD);
if (!$conn) {
//Không kết nối được, thoát ra và báo lỗi
    die("không nết nối được vào MySQL server");
} //end if
//chọn CSDL để làm việc
mysqli_select_db($conn,$DBNAME);
?> 