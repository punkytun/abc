<html>
<head>
    <meta charset="utf-8">
 	<script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
                $("button").click(function(){
               		var id=$(this).val();
						var url="themgiohang.php?id="+id;
						window.open(url,"_self"); 
                })
            });
	</script>   
 </head>
<body>
<p align="right">
<a href="giohang.php">Xem giỏ hàng</a><br><br>
</p>
<?php
include "connect.php";
?> 

<div align="center">
	<h1 align="center">Danh sách các sản phẩm</h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
			$result=mysqli_query($conn,"select * from sanpham") or die("select * from sanpham"."<br/><br/>".mysql_error());
			while($row=mysqli_fetch_assoc($result)){
		?>
    	<tr>
        	<td><img src="<?php echo $row['HINHANH']?>"></td>
            <td>   	<b><?php echo $row['TENSP']?></b><br />
            		<br />
                    Price:<big style="color:green">
                    	$<?php echo $row['GIA']?></big><br /><br />
                    <?php
                    echo "<button value='$row[MASP]'>Add to Cart</button>"; 
						?>
			</td>	
		</tr>
        <tr><td colspan="2"><hr size="1" /></td></tr>
        <?php } ?>
    </table>
</div>
<?php 
//đóng kết nối
mysqli_close($conn);
?>
</div>
</body>
</html>