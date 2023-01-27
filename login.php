<?php include('userdb.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>System Login Form </title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div class="imgcontainer">
	<input type="image" src="Images/user.png" alt="Login">
</div>

<div class="login-box">
<h1>  System Login </h1>

<form method="post" action="login.php">

<!-- display validation errors here -->
		<?php include('errors.php'); ?>

<P>Username</P>
<input type="text" name="username" placeholder="Enter Username" required>

<p>Password</p>
<input type="password" name="password" placeholder="Enter Password" required>

<br><br><input type="submit" name="login" value="Login"><br><br>

<p>
Not yet a member?<a href="register.php"> Sign up</a>
</p>

</form>
</div>
</body>
</html>  