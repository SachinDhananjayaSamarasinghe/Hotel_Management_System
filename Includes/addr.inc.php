<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$booking_date = $_POST['booking_date'];
$no_of_guests = $_POST['no_of_guests'];
$meals = $_POST['meals'];

$conn=mysqli_connect("localhost" , "root" , "");

if(!$conn){
	die ('could not connect :' . mysqli_error());
}

mysqli_select_db($conn,"hms");



	$sql= "INSERT INTO room_bookings(Name,Email, Phone, Country, Booking_Date,No_of_Guests,Meals)
		VALUES('$name','$email','$phone','$country','$booking_date','$no_of_guests', '$meals');";

if(mysqli_query($conn,$sql)){
	echo "Reservation made successfully" ;
	}
	else{
		echo "Error in inserting records". 'mysqli_error';
	}
?>
