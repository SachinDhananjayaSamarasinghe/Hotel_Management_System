<?php
include_once('db.php');
?>
<!DOCTYPE html>
<html>
<head>
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

</style>
</head>
<body>
	<div class="container">
		<div>
			<h1>Room Reservation Forecasting</h1>
		</div>
		<div class="data">
			<form action="reports.php" method="POST">
			<select name="rt" required="">
				<option >Reservation Method</option>
				<?php
				$query1 = "SELECT * FROM rt ";
				$result1 = mysqli_query($conn,$query1);
				while ($row1 = mysqli_fetch_array($result1)) {
					$rowData1 = $row1['id'];
					$rowData2 = $row1['rm'];
					?>
					<option value="<?php echo $rowData1; ?>"><?php echo $rowData2; ?></option>

										<?php

					}

				 ?>
				<!--<option>Online Reservation</option>
				<option>Front Door Reservation</option>-->
			</select>

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
			<button type="submit" name="submit" class="submit"/ >Generate
			</button>

			<table style="margin-top: 50px;" ; class="table table-hover">
				<tr>
					<th>Customer Name</th>
					<th>Staying From</th>
					<th>Staying Upto</th>
				</tr>

					<?php
						if(isset($_POST['submit'])){

				$rm = $_POST['rt'];
				$room =$_POST['room'];

				$query3 = "SELECT room_bookings2.Name , room_bookings2.Booking_From , room_bookings2.Booking_Upto
				  FROM room_bookings2
				  WHERE room_bookings2.rowData1 = '$rm'
				  AND room_bookings2.rowData3 = '$room' ";
				$result3 = mysqli_query($conn,$query3);
				while ($row3 = mysqli_fetch_array($result3)) {
				//	$rowData5 = $row3['id'];
					$rowData6 = $row3['Name'];
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
 <footer class="container-fluid text-center print" style="position: fixed; left: 0;
   bottom: 0; width: 100%; 
   text-align: right; padding: 8px 20px;">
 <button style="padding: 8px 40px;" onclick="myFunction()">Print </button>

<script>
function myFunction() {
    window.print();
}
</script>
    </footer>
			</form>
		</div>
		
	</div>

</body>
</html>