

<?php include("addtocart.php") ?>
<?php include('header.php') ?>
<?php require('../../views/admin/css/table.css');?>


     <div class="main">
      <div class="shop_top">
		<div class="container">
      <div id="shopping-cart">
<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="checkout.php?action=empty">Empty Cart</a></div>
<form method="post">

<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>
    
<table>
<thead>
<tr>
<th style="text-align:left;"><strong>Name</strong></th>
<th style="text-align:right;"><strong>Quantity</strong></th>
<th style="text-align:right;"><strong>Price</strong></th>
<th style="text-align:center;"><strong>Action</strong></th>
</tr>
</thead>    
<tbody>

<?php
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["price"]; ?></td>
				<td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="checkout.php?action=remove&name=<?php echo $item["name"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td style="text-align:left;" ><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
<td><label class="checkbox"><input type="checkbox" name="cash" value="1"><i> </i>Pay by Cash</label></td>
<td> <label class="checkbox"><input type="checkbox" name="card" value="1"><i> </i>Pay by Card</label></td>    
<td><input style="text-align:right" name="thanhtoan" type="submit"  value="Thanh toán" formaction="thanhtoan1.php">  </td>
</tr>
  
<?php if(isset($error) && $error == true): ?>
<p style="color:red;">Sai Tài khoản hoặc Mật khẩu!</p>
<?php endif; ?>
</tbody>
</table>

  <?php
}
?>

</form>

</div>
	     </div>
	   </div>
	  </div>
	  <?php include('footer.php') ?>
