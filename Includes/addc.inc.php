<?php
include_once 'dbc.inc.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];

	$sql="INSERT INTO cus_details(First_Name, Last_Name, Email , Telephone)
		VALUES('$firstname','$lastname','$email','$telephone');";

if(mysqli_query($conn,$sql)){
	echo "New customer added successfully" ;
	}
	else{
		echo "OOPS...! \n There is an error in inserting records." ," \n ";
		echo "Please use another email address / telephone number.";
	}

?>