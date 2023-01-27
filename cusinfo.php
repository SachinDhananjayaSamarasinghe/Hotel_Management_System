<?php
include_once 'Includes/dbc.inc.php';
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="xcss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>

	<title>Access Customer details</title>

	<!--
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
<body  class="container">
	<h2>Customer Details Chart</h2>
	<br>

	<label>Search</label>
	<input type="search" class="form-control input-sm" placeholder aria-controls ="data-table">

	<center id="data-table" class="table table-hover table table-bordered table-striped">
		<br>
		<table  id="data-table" class=" table table-bordered table-striped"">

	<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Telephone</th><th>Action</th></tr>
<?php
	$sql= "SELECT * FROM cus_details;";
	$result= mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck>0){
		while($row=mysqli_fetch_assoc($result)){
			echo'<tr>';
			echo'<td>'. $row['ID'] .'</td>';
			echo'<td>'. $row['First_Name'] . '</td>';
			echo'<td>'. $row['Last_Name'] . '</td>';
			echo'<td>'. $row['Email'] . '</td>';
			echo'<td>'. $row['Telephone'].'</td>';
			echo '<td width=250>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update.php?id='.$row['ID'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger"  href="delete.php?id='.$row['ID'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';

		} 
	}


?>
<!--<td>
        <input type="submit" name="submit" value="Delete">
</td>-->
	</table>
	</center>
</body>
</html>


</script>

<script>
$(document).ready(function(){
$('.number_only').keypress(function(e){
return isNumbers(e, this);      
});
function isNumbers(evt, element) 
{
var charCode = (evt.which) ? evt.which : event.keyCode;
if (
(charCode != 46 || $(element).val().indexOf('.') != -1) &&      // “.” CHECK DOT, AND ONLY ONE.
(charCode < 48 || charCode > 57))
return false;
return true;
}
});
</script>
