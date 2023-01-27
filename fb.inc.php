<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];



$conn=mysqli_connect("localhost" , "root" , "");

if(!$conn){
	die ('could not connect :' . mysqli_error());
}

mysqli_select_db($conn,"hms");



	$sql= "INSERT INTO feedback(Name,Email, Message)
		VALUES('$name','$email', '$message');";

if(mysqli_query($conn,$sql)){
	echo "Thanks for your companny..." ;
	}
	else{
		echo "OOPS...There seems an errror. Please try again.";
	}

?>
