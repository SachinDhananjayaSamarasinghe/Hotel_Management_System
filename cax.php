<?php
include_once('cadb.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
  .submit{
	margin-top: 18px;
	width: auto;
	padding: 6px;
	border: 0px auto;
	font-weight: bold;
	outline: none;
	background: #4CAF50;
	color: white;
	cursor: pointer;
}

.data{
	width:800px;
	padding: 6px;
	margin-top: 20px;
}

.data select {
	width: 200px;
	padding: 6px;
	margin: 20px 0px;
	float: left;
	position: relative;
	margin-right: 20px;

}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}

</style>
</head>
<body>
	<div class="container">
		<div >
			<h3>Please check the availability before make a reservation</h3>
		</div>
		<div class="data">
			<form action="cax.php" method="POST">

			<select name="room" required="">
				<option>Room Type</option>
				<?php
				$query2 = "SELECT * FROM room ";
				$result2 = mysqli_query($conn,$query2);
				while ($row2 = mysqli_fetch_array($result2)) {
					$rowData3 = $row2['id'];
					$rowData4 = $row2['room'];
					?>
					<option value="<?php echo $rowData3; ?>"><?php echo $rowData4; ?></option>

										<?php

					}

				 ?>
				<!--<option>Individual</option>
				<option>Family</option>	-->		
			</select>

			<select name="rnx" required="" >
				<option >Room Number</option>
				<?php
				$query1 = "SELECT * FROM rnx ";
				$result1 = mysqli_query($conn,$query1);
				while ($row1 = mysqli_fetch_array($result1)) {
					$rowData10 = $row1['id'];
					$rowData11 = $row1['room_no'];
					?>
					<option value="<?php echo $rowData10; ?>"><?php echo $rowData11; ?></option>

										<?php

					}

				 ?>
				<!--<option>Online Reservation</option>
				<option>Front Door Reservation</option>-->
			</select>

			<button type="submit" name="submit" class="submit"/ >Check the Availability 
			</button>

			<table class="table table-hover" style="margin-top: 50px;">
				<tr>
					<th>Status</th>
					<th>From</th>
					<th>Upto</th>
				</tr>

				<?php
						if(isset($_POST['submit'])){

				$room = $_POST['room'];			
				$room_no = $_POST['rnx'];

				$query3 = "SELECT room_bookings2.Status , room_bookings2.Booking_From , room_bookings2.Booking_Upto
				  FROM room_bookings2
				  WHERE room_bookings2.rowData3 = '$room'
				  AND room_bookings2.rowData10 = '$room_no' ";
				$result3 = mysqli_query($conn,$query3);
				while ($row3 = mysqli_fetch_array($result3)) {
				//	$rowData5 = $row3['id'];
					$rowData6 = $row3['Status'];
					$rowData7 = $row3['Booking_From'];
					$rowData8 = $row3['Booking_Upto'];
					?>
				<tr>
			
					<td><?php echo $rowData6 ; ?></td>
					<td><?php echo $rowData7 ; ?></td>
					<td><?php echo $rowData8 ; ?></td>
				</tr>


	              <?php

					}
				}

				?>


			</table>
			</form>
		</div>
		
	</div>

<div class="footer">
  <p>Note that rooms available for booking will results an empty table.</p>
</div>

</body>
</html>
