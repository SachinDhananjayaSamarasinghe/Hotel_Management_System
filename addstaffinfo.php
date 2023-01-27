<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body{font-family: Arial,Helvetica,sans-serif;
	background-color: white;
	background-size: medium;
	background-position: absolute ;
	}
	*{box-sizing: border-box;}

.input-container{
	display: -ms-flexbox;
	display: flex;
	width: 100%;
	margin-bottom: 15px;
}

.icon{
	padding: 10px;
	background: dodgerblue;
	color: white;
	min-width: 50px;
	text-align: center;
}

.input-field{
	width: 100%;
	padding: 10px;
	outline: none;
}

.input-field:focus{
	border: 2px solid dodgerblue;
}

.btn{
	background-color: dodgerblue;
	color: white;
	padding: 15px 20px;
	border: none;
	cursor: pointer;
	width: 100%;
	font-size: 20px;
	opacity: 0.9;
}

.btn:hover{
	opacity:1;
}

h2{
	text-align: center;
	color: black;
}
</style>
	<title>Adding Staff Data</title>
</head>
<body>

	<form action= "Includes/add.inc.php" style="max-width: 500px;margin: auto" method="POST">
		<h2>Add New Member</h2>
		<div class="input-container">
			<i class="fa fa-user icon"></i>
		<input class="input-field" type="text" name="firstname" placeholder="First Name" required>
	</div>
	
		<br>

		<div class="input-container">
			<i class="fa fa-user icon"></i>
		<input class="input-field" type="text" name="lastname" placeholder="Last Name" required >
	</div>
	
		<br>

			<div class="input-container">
			<i class="fa fa-briefcase icon"></i>
		<input class="input-field" type="text" name="post" placeholder="Post" required>
	</div>
	
		<br>

			<div class="input-container">
			<i class="fa fa-table icon"></i>
		<input type="text" class="input-field" name="currentstatus" placeholder="Current Status" required>
	</div>
		<br>
	

		<div class="input-container">
			<i class="fa fa-envelope icon"></i>
		<input class="input-field" type="text" name="address" placeholder="Address" required>
	</div>

		<br>
	

		<div class="input-container">
			<i class="fa fa-phone icon"></i>
		<input class="input-field" type="text" name="telephone" placeholder="Telephone" required>
	</div>

		<br>
		<button type="submit" class="btn" name="submit">Add Member</button> 
    
	</form>
</body>
</html>