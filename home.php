<?php include('userdb.php'); 

// if user is not logged in, they cannot access this page

if(empty($_SESSION['username'])){
	header('location: login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>

body{
	margin : 0;
	padding: 0;
	background-color: black;
	background-size: medium;
	background-position: absolute ;
	font-family: sans-serif;
}

h2{
	margin: 0;
	padding: 0 0 0px;
	text-align: center;
	margin-top: 50px;
	margin-left: 15px;
	font-size: 35px;
	color: white;
}

h3{
	margin: 0;
	padding: 0 0 0px;
	text-align: center;
	margin-left: 50px;
	font-size: 30px;
	color:blue;
}

.header{
	width: 65%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 3px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}

.content{
	width: 65%;
	margin: 0px auto;
	padding: 20px;
	border: 3px solid #B0C4DE;
	background: #4CAF50;
	border-radius: 0px 0px 10px 10px;
}

.success{
	color: #3c763d;
	background: black;
	border: 3px solid #3c763d;
	margin-bottom: 20px;
	text-align: center;

}

.topnav{
	overflow:hidden;
	background-color:blue;
	font-family:Arial, Helvetica, sans-serif;
}

.topnav a{
	float:left;
	color:#f2f2f2;
	text-align:center;
	padding:14px 16px;
	text-decoration:none;
	font-size: 16px
}
.dropdown {
	float:left;
	overflow: hidden;
}

.dropdown .dropbtn{
	font-size: 16px;
	border: none;
	outline: none;
	color: white;
	padding: 14px 16px;
	background-color: inherit;
	font-family: inherit;
	margin: 0;
}
.topnav a:hover, .dropdown:hover .dropbtn{
	background-color:green;
}

.dropdown-content{
	display:none;
	position:absolute;
	background-color: #f9f9f9;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
}

.dropdown-content a{
	float:none;
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
}

.dropdown-content a:hover{
	background-color: #ddd;
}

.dropdown:hover .dropdown-content{
	display:block;
}
.topnav a.active{
	background-color:#4CAF50;
	color:white;
}
.right-align{
	text-align: right;
}
.w3-right{
	float:right!important
	}
</style>
</head>
<body>

<div class="topnav">
<a class="active" href="#home"> Home</a>

<div class="dropdown">
	<button class="dropbtn">Customer
		<i class="fa fa-caret-down"></i>
	</button>
		<div class="dropdown-content">
			<a href="cusinfo.php">Customer Details</a>
			<a href="addcusinfo.php">Add Customer</a>
		</div>
	</div>

<div class="dropdown">
	<button class="dropbtn">Staff
		<i class="fa fa-caret-down"></i>
	</button>
		<div class="dropdown-content">
			<a href="staffinfo.php">Staff Details</a>
			<a href="addstaffinfo.php">Add Member</a>
		</div>
	</div>

<div class="dropdown">
	<button class="dropbtn">Room Reservation
		<i class="fa fa-caret-down"></i>
	</button>
		<div class="dropdown-content">
			<a href="resinfocico.php">Booking Details</a>
			<a href="resxweb.php">New Booking</a>
		</div>
	</div>

<div class="dropdown">
	<button class="dropbtn">Check-in Check-out
		<i class="fa fa-caret-down"></i>
	</button>
	<div class="dropdown-content">
		<a href="cicoinfo.php">Check-in Check-out Details</a>
    </div>
</div>

<div class="dropdown">
	<button class="dropbtn">Add Info
		<i class="fa fa-caret-down"></i>
	</button>
		<div class="dropdown-content">
			<a href="SelectSection.php">Rooms</a>
			<a href="SelectSection1.php">Food & Beverage </a>
			<a href="SelectSection2.php">Packages & Promotions </a>
			<a href="SelectSection3.php">Packages & Promotions </a>
		</div>
	</div>

	<div class="dropdown">
	<button class="dropbtn">Reports
		<i class="fa fa-caret-down"></i>
	</button>
		<div class="dropdown-content">
			<a href="reports.php">Room Reservation Forecasting Report</a>
			<a href="reports2.php">Payment Detail Report </a>
			<a href="cer.php">Customer Feedback Evaluation Report </a>
		</div>
	</div>

	<div class="dropdown">
	<button class="dropbtn">Invoice
		<i class="fa fa-caret-down"></i>
	</button>
		<div class="dropdown-content">
			<a href="invoice.php">Create Invoice</a>
		</div>
	</div>

	<div class="dropdown">
	<button class="dropbtn ">Logout
	</button>
	<div class="dropdown-content">
			<a href="home.php?logout='1'">Click to logout from the system</a>
		</div>	
	</div>
</div>
<h2>Welcome To The Admin Page</h2>
<br>
<h3>Tanzanite Beach View Hotel<h3>

	<div class="header">
		<h3 style="color: white">Home Page</h3>
		
	</div>
	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php if(isset($_SESSION["username"])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p><a href="home.php?logout='1'" style="color: black;">Logout</a></p>
			<?php endif ?>
	</div>
</body>
</html>