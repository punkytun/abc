
<?php
include('../../admin/user/adduser.php')
?>
<?php include('header.php') ?>
     <div class="main">
      <div class="shop_top">
	     <div class="container">
         <form name="add" method="POST" action="">
            <?php if(isset($_SESSION['success'])): ?>
            <p style="color:green;">Thành viên đã được thêm mới thành công!</p>
            <?php unset($_SESSION['success']); ?>
            <?php endif; ?>
								<div class="register-top-grid">
										<h3>PERSONAL INFORMATION</h3>
										<div>
											<span>First Name<label>*</label></span>
											<input type="text" name="email" required value="" />
										</div>
										<div>
											<span>Last Name<label>*</label></span>
											<input type="text" name="name" required value="" />
										</div>
										<div>
											<span>Email Address<label>*</label></span>
											<input type="text" name="username" required value="" />
										</div>
										<div class="clear"> </div>
											<a class="news-letter" href="#">
												<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
											</a>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>LOGIN INFORMATION</h3>
										<div>
											<span>Password<label>*</label></span>
											<input type="password" name="password" value="" />
										</div>
										<div>
											<span>Confirm Password<label>*</label></span>
											<input type="text">
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<input type="submit" value="submit">
						</form>

					</div>
		   </div>
	  </div>
<?php include('footer.php') ?>
