<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<body>

  	<h1><center>Login Here</center></h1>
  <form method="post" action="login.php">
  <?php include('errors.php'); ?>
  	<center>
  		<p>E-mail</p>
  		<input type="text" id="email" name="email" class="input-box" placeholder="Enter Your E-mail" >
  		<p>Password</p>
  		<input type="password" id="password" class="input-box" name="password" placeholder="Enter Your Password"><br>
		
		<p><span><input type="checkbox" name="remember" value="1" ></span>Remember me</p>
		
  		<input type="submit" name="login_user" value="Login">

  		<p>Not yet a member? <a href="register.php">Sign up</a></p>
	  </center>
  </form>
</body>
</html>
<?php
	if(isset($_COOKIE['email']) and isset($_COOKIE['password'])) {
		$email = $_COOKIE['email'];
		$password= $_COOKIE['password'];

		echo "<script>
			document.getElementById('email').value = '$email';
			document.getElementById('password').value = '$password';
		</script>";
	}
?>