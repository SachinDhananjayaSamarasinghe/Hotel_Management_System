<?php
 include_once 'fb1.inc.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<style>
 		
 	</style>
 </head>
 <body class="container">
 	<div>
 		<h2>Customer Feedback Evaluation</h2>
 	</div>
 	<br>
 	<center>
 	<table  class="table table-hover">
 		<tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th></tr>

 		<?php

 		$sql = "SELECT * FROM feedback ;";
 		$result = mysqli_query($conn,$sql);
 		$checkresult = mysqli_num_rows($result);

 		if($checkresult>0){
		while ($row=mysqli_fetch_assoc($result)) {
 			echo '<tr>';
 			echo '<td>' . $row['ID'] . '</td>';
 			echo '<td>' . $row['Name'] . '</td>';
 			echo '<td>' . $row['Email'] . '</td>';
 			echo '<td>' . $row['Message'] . '</td>';
 			echo '</tr>';
 		}
}

?>

 	</table>
 </center>
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
 </body>
 </html>