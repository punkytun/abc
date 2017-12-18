<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Quản trị - Thành viên - Danh sách</title>



</head>
  <?php require '/css/header.css';?>
    <?php require '/css/header-basic.css';?>
    <?php require '/css/form.css';?>
        <?php require '/css/footer.css';?>

      <?php require '/css/table.css';?>
      <header class="header-basic">
        	<div class="header-limiter">
        <div class="logo">
          <a href="<?php echo SITE_URL . 'admin/home.php'; ?>"><h1><span class="blue-bold">MT </span>- PEE</h1></a>
        </div>
    </div>

      </header>

<div class="login">
    <div class="login-triangle"></div>
    <h2 class="login-header">Log in</h2>

    <form class="login-container" name="login" method="POST" action="">
<?php if(isset($error) && $error == true): ?>
<p style="color:red;">Sai Tài khoản hoặc Mật khẩu!</p>
<?php endif; ?>
<p>
<input type="text" name="username" placeholder="Name" value="" required/>
</p>
<p>
<input type="password" name="password" placeholder="Pasword" value="" required />
</p>
<p>
<input type="submit" value="Login" />
</p>
    </form></div>
    <div class="footer">&copy;2017 Group E All Right Reserved</div>

</body>
</html>
