<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<center>
  <title>Register</title>
</center>
</head>
<body>
<center>
  	<h1>Register Here</h1>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>

  	  <p>Username</p>
  	  <input type="text" class="input-box" name="username" value="<?php echo $username; ?>" placeholder="Enter Username">
  	
  	  <p>Email</p>
  	  <input type="email" class="input-box" name="email" value="<?php echo $email; ?>" placeholder="Enter Your E-mail">
  	  <p>Password</p>
  	  <input type="password" name="password_1" class="input-box" placeholder="Enter Your Password">
  	  <p>Confirm password</p>
  	  <input type="password" name="password_2" class="input-box" placeholder="Enter Your Password">

  	  <p><span><input type="submit" name="reg_user" value="Submit"></span></p>
  	
  	<p>
  		Already a member? <a href="login.php">Login</a>
  	</p>
  </form>
  </center>
</body>
</html>