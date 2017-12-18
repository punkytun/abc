<?php
	session_start();
	ob_start(); 
?> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Untitled Document</title>
    <script src="jquery.js"></script>
    <script language="javascript" type="text/javascript">
    	$(document).ready(function(){
				$("#newgiohang").click(function(){
					window.open("sanpham.php","_self");
					
					//alert("test");
				})
			}); 
    </script>
</head>
<body>
        <div align="center">
            <!--<input name="capnhat" type="submit" class="style3" value="Cập nhật">
            <input name="thanhtoan" type="submit" class="style3" value="Thanh toán" formaction="thanhtoan.php">
            --> 
            <button id="newgiohang"> New giỏ hàng</button>
            
        </div>
    </form>
</body>

</html>