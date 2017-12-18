<?php
function get_order_list()
{
require '/../libraries/connect.php';
$sql = "SELECT * FROM cthd ORDER BY SOHD DESC";
return mysqli_query($conn,$sql);
}

function delete_order($order_id)
{
require '/../libraries/connect.php';
$sql = "DELETE FROM cthd WHERE SOHD='$order_id'";
$query= mysqli_query($conn,$sql);
return mysqli_fetch_assoc($query);
}
?>
