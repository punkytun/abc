<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Quản trị - Thành viên - Danh sách</title>
 


</head>
  <?php require '/../css/header.css'?>
    <?php require '/../css/header-basic.css'?>
    <?php require '/../css/table.css'?>
    <?php require '/../css/footer.css';?>
      <header class="header-basic">
        	<div class="header-limiter">  
        <div class="logo">
          <a href="<?php echo SITE_URL . 'admin/home.php'; ?>"><h1><span class="blue-bold">MT </span>- PEE</h1></a>
        </div>
        <div class="main-nav">
          <nav>
             <?php require '/../common/menu.tpl.php'; ?>
        </nav>
                </div></div>
      </header>
<table>
<thead>
<tr>
<th>ID</th>
<th>Hình ảnh</th>
<th>Tên sản phẩm</th>
<th>Giá bán</th>
<th>Size</th> 
<th>Size1</th> 
<th>Size2</th> 
<th>Long detail</th> 
<th>Số lượng</th>    
<th>Trạng thái</th>
   
<th>Tác vụ</th>
</tr>
</thead>
<tbody>
<?php while($product = mysqli_fetch_assoc($product_list)): ?>
<tr>
<td><?php echo $product['id']; ?></td>
<td><img src="<?php echo SITE_URL . 'admin/product/userfiles/' . $product['image']; ?>" width="20" height="20" /></td>
<td><a href="<?php echo SITE_URL . 'admin/product/edit.php?id=' . $product['id']; ?>"><?php echo $product['name']; ?></a></td>
<td><?php echo number_format($product['price'], 0, '', '.'); ?> VNĐ</td>
<td><?php echo $product['size']; ?></td>  
<td><?php echo $product['size1']; ?></td>     
<td><?php echo $product['size2']; ?></td>      
<td><?php echo $product['longdetail']; ?></td>     
<td><?php echo $product['quantity']; ?></td>     
<td><?php echo ($product['status'] == 1) ? 'Kích hoạt' : 'Không kích hoạt'; ?></td>
<td><a href="<?php echo SITE_URL . 'admin/product/delete.php?id=' . $product['id']; ?>">Xóa</a></td>
</tr>
    </tbody>
<?php endwhile; ?>
</table>
 <div class="footer">&copy;2017 Group E All Right Reserved</div>
</body>
</html>