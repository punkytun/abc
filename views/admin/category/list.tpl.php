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
<th>Tên danh mục</th>
<th>Trạng thái</th>
<th>Tác vụ</th>
</tr>
</thead>
<tbody>
<?php while($category = mysqli_fetch_assoc($category_list)): ?>

<tr>
<td><?php echo $category['id']; ?></td>
<td><a href="<?php echo SITE_URL . 'admin/category/edit.php?id=' . $category['id']; ?>"><?php echo $category['name']; ?></a></td>
<td><?php echo ($category['status'] == 1) ? 'Kích hoạt' : 'Không kích hoạt'; ?></td>
<td><a href="<?php echo SITE_URL . 'admin/category/delete.php?id=' . $category['id']; ?>">Xóa</a></td>
</tr>
<?php endwhile; ?>
    </tbody>
    </table>
<div class="footer">&copy;2017 Group E All Right Reserved</div>
</body>
</html>