<?php include('userdb.php') ; ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration </title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">

		<!-- display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="input">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?> ">		
		</div>
		<div class="input">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">		
		</div>
		<div class="input">
			<label>Password</label>
			<input type="Password" name="password_1" value="">		
		</div>
		<div class="input">
			<label>Confirm Password</label>
			<input type="Password" name="password_2" value="">		
		</div>
		<div class="input">
			<button type="submit" name="register" class="btn">Register</button>		
		</div>

		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>

	</form>


</body>
</html>