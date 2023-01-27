<?php

include_once 'dbh.inc.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$post = $_POST['post'];
$currentstatus = $_POST['currentstatus'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];

	$sql= "INSERT INTO staff_details(First_Name, Last_Name, Post, Current_Status, Address, Telephone)
		VALUES('$firstname','$lastname','$post','$currentstatus','$address','$telephone');";

if(mysqli_query($conn,$sql)){
	echo "New memeber added successfully" ;
	}
	else{
		echo "OOPS...! \n There is an error in inserting records." ," \n ";
		echo "Please use another telephone number.";
	}

?>