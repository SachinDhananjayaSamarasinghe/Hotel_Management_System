<?php
$conn= mysqli_connect("localhost", "root", "", "hms");
if(isset($_POST["ID"]))
{
 $query = "DELETE FROM cus_details WHERE id = '".$_POST["ID"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
