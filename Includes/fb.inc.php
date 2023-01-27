<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$conn=mysqli_connect("localhost" , "root" , "");

if(!$conn){
	die ('could not connect :' . mysqli_error());
}

mysqli_select_db($conn,"hms");

	$sql= "INSERT INTO room_bookings2(Name,Email, Message)
		VALUES('$name','$email', '$message');";

if(mysqli_query($conn,$sql)){
	echo "Resevation Made Successfully" ;
	}
	else{
		echo "OOPS...! \n There is an errror in inserting records." ," \n ";
		echo "Please use another email address / telephone number.";
	}

?>
