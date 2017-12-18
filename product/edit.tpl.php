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
    <?php require '/../css/form.css'?>
    <?php require '/../css/footeradd.css';?>
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
    
  
    
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Edit</h2>

<form class="login-container" name="edit" method="POST" enctype="multipart/form-data" action="">
<?php if(isset($_SESSION['success'])): ?>
<p style="color:green;">Sản phẩm đã được chỉnh sửa thành công!</p>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>

<p>
<label>Danh mục:</label>
<select name="category_id">
<?php while($category_active = mysqli_fetch_assoc($category_active_list)): ?>
<option value="<?php echo $category_active['id']; ?>" <?php echo ($product['category_id'] == $category_active['id']) ? 'selected="selected"' : ''; ?>><?php echo $category_active['name']; ?></option>
<?php endwhile; ?>
</select>
</p>
<p>
<label>Tên sản phẩm:</label>
<input type="text" name="name" value="<?php echo $product['name']; ?>" />
</p>
<p>
<label>Size:</label>
<textarea name="size"><?php echo $product['size']; ?></textarea>
</p>
<p>
<label>Size1:</label>
<textarea name="size1"><?php echo $product['size1']; ?></textarea>
</p> 
<p>
<label>Size2:</label>
<textarea name="size2"><?php echo $product['size2']; ?></textarea>
</p> 
<p>
<label>Long detail:</label>
<textarea name="longdetail"><?php echo $product['longdetail']; ?></textarea>
</p>     
<p>
<label>Số lượng:</label>
<textarea name="quantity"><?php echo $product['quantity']; ?></textarea>
</p>      
<p>
<label>Chi tiết:</label>
<textarea name="detail"><?php echo $product['detail']; ?></textarea>
</p>
    
<p>
<label>Hình ảnh:</label>
<input type="file" name="image" />
</p>
<p>
<label>Giá bán:</label>
<input type="text" name="price" value="<?php echo $product['price']; ?>" />
</p>
<p>
<label>Trạng thái:</label>
<input type="checkbox" name="status" value="1" <?php echo ($product['status'] == 1) ? 'checked="checked"' : ''; ?> />
</p>
<p>
<input type="submit" value="Chỉnh sửa" />
</p>
    </form></div>
</body>
<div class="footer">&copy;2017 Group E All Right Reserved</div>

</html>