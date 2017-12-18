<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<body>
<?php
	include "../connect.php";
	$shd=$_POST['sohd'];
	$str="select sanpham.TENSP, cthd.SL, sanpham.GIA from cthd,sanpham  where cthd.SOHD='$shd' and cthd.MASP=sanpham.MASP";
	$rs=mysql_query($str,$conn);
	echo "<table bordercolor='#660000' cellspacing='0' border='1'>";
	echo "<tr><th>Tên sản phẩm</th><th>Số lượng</th><th>Đơn giá/SP</th><th>Tổng giá</th></tr>";
	$tongtien=0;
	while($row=mysql_fetch_row($rs))
	{
		$gia=$row[1]*$row[2];
		$tongtien+=$gia; 
		echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$gia."</td></tr>";
	} 
	echo "<tr><td colspan='3'>Tổng tiền</td>";
	echo "<td>".$tongtien."</td></tr>";
	echo "</table>"; 
?>
</body>
</html>