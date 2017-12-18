<?php
		session_start();
		ob_start();
		include "connect.php";
		
		//Tạo hóa đơn -> lấy id
		$result = mysqli_query( $conn,"select sohd from hoadon order by sohd desc limit 1");
		$row = mysqli_fetch_row($result);
		$sohd = $row[0]+1;
		
		$tong = 0;
		$ngaylaphoadon=date("Y/m/d");
		if (isset($_SESSION['giohang']))
		{
			foreach ($_SESSION['giohang'] as $id => $sl) 
			{
				$result = mysqli_query($conn,"select gia from sanpham where masp = '$id'" );
				$row = mysqli_fetch_array($result);
				$gia = $row[0];
				$tong+=$gia*$sl;
				mysqli_query( $conn,"insert into cthd(sohd,masp,sl) values($sohd,'$id',$sl)");
			}
		
			mysqli_query( $conn,"insert into hoadon(SOHD,NGHD,TRIGIA) values($sohd, '$ngaylaphoadon', $tong)");
			unset($_SESSION['giohang']);
		}
		
		if ($tong>0) 
		{	
			echo 'Thanh toán thành công<br>';
			echo "<a href='index.php'>Tiếp tục mua với lần mua mới</a>";
		}
		else 
			echo "Thanh toán không thành công";
?>