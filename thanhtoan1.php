
<?php
		session_start();
		ob_start();
		include "../../libraries/connect.php";
       include('header.php') ;
include('error.css') ;
		$bk = 1;
		//Tạo hóa đơn -> lấy id
		$result = mysqli_query( $conn,"select sohd from hoadon order by sohd desc limit 1");
		$row = mysqli_fetch_row($result);
		$sohd = $row[0]+1;

		$tong = 0;
		$ngaylaphoadon=date("Y/m/d");
		if (isset($_SESSION['cart_item']))
		{
			foreach ($_SESSION['cart_item'] as $id => $sl)
			{
				$result = mysqli_query($conn,"select price from product where name = '$id'" );
				$row = mysqli_fetch_array($result);
				$gia = $row[0];
				$a = $sl['quantity'];
				$tong+= $gia * $a;
				if(isset($_POST['cash']) &&
					 $_POST['cash'] == 1 && isset($_POST['card']) &&
						 $_POST['card'] == 1)
					{
						$bk = 0;


					}
					else if (isset($_POST['card']) &&
						 $_POST['card'] == 1) {
						mysqli_query( $conn,"insert into cthd(sohd,masp,sl, pttt) values($sohd,'$id',$a, 'card')");

					}else if (
							 isset($_POST['cash']) &&
			 					 $_POST['cash'] == 1) {
									 mysqli_query( $conn,"insert into cthd(sohd,masp,sl, pttt) values($sohd,'$id',$a, 'cash')");
									 
					}
					else
					{
						$bk = 0;
					}
}
		}
		if ($tong>0 && $bk ==1)
		{
			mysqli_query( $conn,"insert into hoadon(SOHD,NGHD,TRIGIA) values($sohd, '$ngaylaphoadon', $tong)");
			unset($_SESSION['cart_item']);
			header("location:shop.php");
		}
		else{
     $error = true;      
}


        

?>
<a href="checkout.php"><img src="images/error.jpg"></a>
<?php include "footer.php" ?>
