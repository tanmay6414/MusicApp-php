<?php include('server.php') ;
$title="Login";

include 'layout/header.php';
?>
<body background="images/background.jpg">

  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php" style="background-color: #3a3838">
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
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="regiser.php">Sign up</a>
  	</p>
  </form>
<?php
include 'layout/footer.php';
?>