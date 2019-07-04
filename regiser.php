<?php include('server.php') ;
$title="User Registration";
include 'layout/header.php';
?>


  <div style=" width: 30%; color: white;background-image: url('images/beat.jpg');text-align: center;border: 1px solid #B0C4DE;border-radius: 10px 10px 0px 0px;padding: 20px;margin: 0px auto;">
  	<h2> User Register</h2>
  </div>
	
  <form method="post" action="regiser.php" style="background: #3a3838;width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  border-radius: 0px 0px 10px 10px;">
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
      <label>Mobile Number</label>
      <input type="tel" name="number">
    </div>

    <div class="input-group">
      <label>Date of Birth</label>
      <input type="date" name="birthday" value="<?php echo $email; ?>">
    </div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php" ><span style="color: black">Sign in</span></a>
  	</p>
  </form>
<?php
include 'layout/footer.php';
?>