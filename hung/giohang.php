<?php
session_start();
ob_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Untitled Document</title>
   </head>
<body>
<?php
	include "connect.php";
	if(!isset($_SESSION['giohang']))
		header("location:index.php");
	else 
	{
		$giohang = $_SESSION['giohang'];
		if (isset($_POST['capnhat']) && count($giohang) != "") 
		{
			$soluong_cn = $_POST['soluong'];
			foreach ($soluong_cn as $id => $sl) 
			{
				if ($sl == 0) 
				{
					unset($_SESSION['giohang'][$id]);
				} 
				else 
					if ($sl > 0 && is_numeric($sl)) 
					{
						$_SESSION['giohang'][$id] = $sl;
					}
				header("location: " . $_SERVER['REQUEST_URI'] . "");
			}
		}
		if (count($giohang)) {
		?>
		<form method="post">
			<table width="495" border="1" align="center" cellpadding="0" cellspacing="0">
				<tr bgcolor="#CCCCFF">
					<th colspan="6">
						<div align="center" class="style3">Giỏ hàng</div>
					</th>
				</tr>
				<tr>
					<th width="150">
						<div align="center" class="style2">Tên sản phẩm</div>
					</th>
					<th width="75">
						<div align="center" class="style2">Giá</div>
					</th>
					<th width="75">
						<div align="center" class="style2">Số lượng</div>
					</th>
					<th width="100">
						<div align="center" class="style2">Thành tiền</div>
					</th>
					<th width="50">
						<div align="center" class="style2"><strong>Xóa</strong></div>
					</th>
				</tr>
				<?php
				$tong = 0;
				foreach ($giohang as $id => $sl) {
					$result = mysqli_query($conn,"select * from sanpham where masp = '$id'");
					$row = mysqli_fetch_assoc($result);
	
					?>
					<tr>
						<td width="175">
							<div align="center"><?php echo $row['TENSP']; ?></div>
						</td>
						<td width="50">
							<div align="right"><?php echo $row['GIA']; ?></div>
						</td>
						<td width="75">
							<div align="center"><input name="soluong[<?php echo $id; ?>]" type="text"
													   value="<?php echo $sl; ?>"></div>
						</td>
						<td width="100">
							<div align="right"><?php echo $sl * $row['GIA']; ?></div>
						</td>
						<td width="50">
							<div align="center"><a href="xoa.php?id=<?php echo
								$row['MASP']; ?>">Xóa</a></div>
						</td>
					</tr>
					<?php
					$tong += $sl * $row['GIA'];
				}
				?>
				<tr>
					<td colspan="6" align="right">
						Tổng cộng: <?php echo $tong; ?>
					</td>
				</tr>
			</table>
			<br>
			<div align="center">
				<input type="submit" value="Tiếp tục mua hàng" formaction="index.php">
				<input name="capnhat" type="submit" class="style3" value="Cập nhật">
				<input name="thanhtoan" type="submit" class="style3" value="Thanh toán" formaction="thanhtoan.php">
	</div>
		</form>
<?php
	}
}

?>  </body>

</html>