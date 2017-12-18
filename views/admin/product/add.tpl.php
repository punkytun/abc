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
<body>






<div class="login">
  <div class="login-triangle"></div>

  <h2 class="login-header">Thêm mới sản phẩm</h2>


<form class="login-container" name="add" method="POST" enctype="multipart/form-data" action="">
<?php if(isset($_SESSION['success'])): ?>
<p style="color:green;">Sản phẩm đã được thêm mới thành công!</p>
<?php unset($_SESSION['success']); ?>
<?php endif; ?>

<p>
<label>Danh mục:</label>
<select name="category_id">
<?php while($category_active = mysqli_fetch_assoc($category_active_list)): ?>
<option value="<?php echo $category_active['id']; ?>"><?php echo $category_active['name']; ?></option>
<?php endwhile; ?>
</select>
</p>
<p>

<input type="text" name="name" placeholder="name" required value="" />
</p>
<p>

<input type="text" name="size" placeholder="size" required value="" />
</p>
<p>
<input type="text" name="size1" placeholder="size1" required value="" />
</p>    
<p>
<input type="text" name="size2" placeholder="size2" required value="" />
</p>    
 <p>
<input type="text" name="longdetail" placeholder="longdetail" required value="" />
</p>   
 <p>
<input type="text" name="quantity" placeholder="quantity" required value="" />
</p>        
<p>
    

<textarea name="detail" placeholder="detail" required></textarea>
</p>
<p>
<label>Hình ảnh:</label>
<input type="file" required name="image" />
</p>
<p>

<input type="text" name="price" placeholder="price" required value="" />
</p>
<p>
<label>Trạng thái:</label>
<input type="checkbox" name="status"  value="1" />
</p>
<p>
<input type="submit" value="Thêm mới" />
</p>
    </form></div>
<div class="footer">&copy;2017 Group E All Right Reserved</div>

    </body>
</html>
