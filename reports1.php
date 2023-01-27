<?php
include_once('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class="container">
		<div class="wrapper">
			<h1>Payment Detail</h1>
		</div>
		<div class="data">
			<form action="reports.php" method="POST">
			<select name="Sections" required>
				<option></option>
				<option>Online Reservations</option>
				<option>Front Door Reservations</option>
				<option>Expected Check-ins</option>
				<option>Expected Check-outs</option>
				<option>Room Stayovers</option>
				<option>Room Understays</option>
				<option>Expected Room No-shows</option>
				
			</select>
			<button type="submit" name="submit" class="submit"/>Generate
			</button>

			<table border="1" ; class="table">
				<tr>
					<th>Customer Name</th>
					<th>Consumed Items</th>
					<th>Payment Method</th>
					<th>Payment</th>
				</tr>
				
			</table>
			</form>
		</div>
		
	</div>

</body>
</html>