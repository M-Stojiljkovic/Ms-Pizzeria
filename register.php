<?php include('server.php') ?>
<!-- HEAD -->
<?php require "partials/head.php" ?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- NAVBAR -->
<?php require "partials/navbar.php" ?>

<!-- Register forma -->
<header class="form_bg">
<div class="form_header">
  	<h2>Registration</h2>
  </div>
	
  <form class="log_reg" method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="form_btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</header>
<!-- Footer -->
<?php require "partials/footer.php"   ?>
 
</body>

