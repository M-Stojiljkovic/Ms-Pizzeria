<?php include('server.php') ?>
<!-- HEAD -->
<?php require "partials/head.php" ?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- NAVBAR -->
<?php require "partials/navbar.php" ?>

<!-- LOGIN forma -->
<header class="form_bg">

<div class="form_header">
  	<h2>Log in</h2>
  </div>
	 
  <form class="log_reg" method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="form_btn" name="login_user">Sign in</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</header> 
<!-- Footer -->
<?php require "partials/footer.php"   ?>  
</body>
