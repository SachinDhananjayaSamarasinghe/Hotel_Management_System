<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$booking_from = $_POST['booking_from'];
$booking_upto = $_POST['booking_upto'];
$restype = $_POST['restype'];
$rooms = $_POST['rooms'];
$room_no = $_POST['room_no'];
$no_of_guests = $_POST['no_of_guests'];
$meals = $_POST['meals'];
$booked = $_POST['booked'];


$conn=mysqli_connect("localhost" , "root" , "");

if(!$conn){
	die ('could not connect :' . mysqli_error());
}

mysqli_select_db($conn,"hms");



	$sql= "INSERT INTO room_bookings2(Name,Email, Phone, Country, Booking_From, Booking_Upto, rowData1, rowData3, rowData10, No_of_Guests, Meals, Status)
		VALUES('$name','$email','$phone','$country','$booking_from','$booking_upto', '$restype', '$rooms', '$room_no', '$no_of_guests', '$meals', '$booked');";

if(mysqli_query($conn,$sql)){
	echo "Resevation Made Successfully" ;
	}
	else{
		echo "OOPS...! \n There is an errror in inserting records." ," \n ";
		echo "Please use another email address / telephone number.";
	}

?>
