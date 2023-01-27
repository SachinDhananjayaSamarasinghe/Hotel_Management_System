<?php
include_once 'Includes/dbcico.inc.php';

?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Accessing Reservation Data</title>

	<!--
    <script src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
		<style type="text/css">
		table{
			border-collapse: collapse;
			width: 78%;
			font-size: 17pt;
			margin-top:none;
			text-align: center;
		}
		table,th,td{
			border: 1px solid rgb(192,192,192);
		}
		th{
			background: rgb(255,255,255);
			color: black;
		}
		tr:nth-child(odd){
			background: rgba(192,192,192,.2)
		}

		h2{
			text-align: center;
			font-family: Arial;
			font-size: 25px;
		}
	</style>
-->

</head>
<body class="container">
	<h2>Check-in Check-out Details Chart</h2>
	<br>
	<center>
		<table  class="table table-hover">


	<tr><th>ID</th><th>Name</th><th>Check-in</th><th>Check-out</th><th>Action</th></tr>
			
	
<?php
$sql="SELECT * FROM room_bookings2;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){
		echo'<tr>';
		echo'<td>'. $row['ID'] . '</td>';
		echo'<td>'. $row['Name'] .'</td>';
		echo'<td>'. $row['Booking_From'] .'</td>';
		echo'<td>'. $row['Booking_Upto'].'</td>';
		echo '<td width=250>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="updatecico.php?id='.$row['ID'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="deletecico.php?id='.$row['ID'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
	}
}
?>
	</table>
	</center>
</body>
</html>
