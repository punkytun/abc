<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Liệt kê danh sách đơn đặt hàng</title>
<link rel="stylesheet" href="style.css" type="text/css" />  
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
	$('button').click(function(){
			value=$(this).val();
			name=$(this).attr('name');
			if(name=='Xem')
			{
				//alert('xem được chọn');
				$.post("chitietdonhang.php",
				{
					sohd:value
				},
				function(data,status)
				{
					if(status=='success')	
					{
						$("#main_right").html(data);  
        			}
				});
			}
			if(name=='Xoa')
			{
				alert('Delete được chọn');
			}
			if(name=='Sua')
			{
				alert("Sua");
			}
		});
});
</script>

</head>
<body>
<div id="main">
<?php
	include "../connect.php";
	$str="select * from hoadon";
	$rs=mysql_query($str,$conn);
	echo "<div id='main_left'>";
	echo "<table>";
	echo "<tr><th>STT</th><th>Ngày lập</th><th>Tổng giá</th><th colspan='3'>Chức năng</th></tr>";
	$i=1;
	while($row=mysql_fetch_assoc($rs))
	{
		echo "<tr><td>$i</td><td>".$row['NGHD']."</td>"."<td>".$row['TRIGIA']."</td>";
		echo "<td><button value='$row[SOHD]' name='Xem'>Xem</button></td>";
		echo "<td><button value='$row[SOHD]' name='Xoa'>Xóa</button></td>";
		echo "<td><button value='$row[SOHD]' name='Sua'>Sửa</button></td>";
		echo "</tr>";
		$i++;
	}
	echo "</table>";
	echo "</div>";
	echo "<div id='main_right'>Màn hình left";
	echo "</div>"; 
?>
</div></body>
</html>