<?php require_once('../Connections/localhost2.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "EditPageForm")) {
  $updateSQL = sprintf("UPDATE pages2 SET PageContent=%s WHERE ID=%s",
                       GetSQLValueString($_POST['PageContent'], "text"),
                       GetSQLValueString($_POST['IDhiddenField'], "int"));

  mysql_select_db($database_localhost2, $localhost2);
  $Result1 = mysql_query($updateSQL, $localhost2) or die(mysql_error());

  $updateGoTo = "SelectSection2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_EditPage = "-1";
if (isset($_GET['ID'])) {
  $colname_EditPage = $_GET['ID'];
}
mysql_select_db($database_localhost2, $localhost2);
$query_EditPage = sprintf("SELECT * FROM pages2 WHERE ID = %s", GetSQLValueString($colname_EditPage, "int"));
$EditPage = mysql_query($query_EditPage, $localhost2) or die(mysql_error());
$row_EditPage = mysql_fetch_assoc($EditPage);
$totalRows_EditPage = mysql_num_rows($EditPage);
?>
<!DOCTYPE html>
<html>
<title>Tanzanite bech View Hotel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="xcss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="#packages" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PACKAGES</a>

  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#packages" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PACKAGES</a>
  </div>

<!-- Page content -->
<div class="w3-content w3-text-grey" style="max-width:2000px; margin-top:0px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center  ">
    <img src="Images/wash22.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">  
    </div>
  </div>
<!--  <div class="mySlides w3-display-container w3-center">
    <img src="Images/service1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Serving</h3>
      <p><b>you with professinolism </b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="Images/b2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Breakfast</h3>
      <p><b>that fill your herat</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/l22.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3 class="w3-text-black">Lunch</h3>
      <p class="w3-text-black"><b>in a sri lanakn style</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/dinner1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Dinner</h3>
      <p><b>of a royal quality</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/d55.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Desserts</h3>
      <p><b>that makes your eyes lid up</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/t22.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Sri Lankan Tea</h3>
      <p><b>that settles your thirsty</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/room1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Wake Up</h3>
      <p><b>as near as to the beach</b></p>    
    </div>
  </div>


  <div class="mySlides w3-display-container w3-center">
    <img src="Images/wash33.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Laudary</h3>
      <p><b>for free</b></p>    
    </div>
  </div>


  <div class="mySlides w3-display-container w3-center">
    <img src="Images/diving22.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Diving</h3>
      <p><b>that makes your leisure time worthy</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/sunbathing33.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Sunbathing</h3>
      <p><b>that makes you healthy</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/surfing11.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Surfing</h3>
      <p><b>that unleash your sporting skills</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/w33.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Wildlife</h3>
      <p><b>that completes your journey</b></p>    
    </div>
  </div>
  <!-- The Packages Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:1100px" id="packages">
    <h2 class="w3-wide">PACKAGES</h2>
    <p class="w3-opacity"><i>Make sure to select the best that suits to you</i></p>
  </br>
    <p class="w3-justify">Here are the packages and promotions availabe for you</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Rooms</p>
        <p><img src="Images/R1.jpg" class="w3-round w3-margin-bottom" height="205" alt="Random Name" style="width:80% ">          </p>
        <p><a href="rmore.php" class="w3-hover-red" style="display: none;">More</a></p>
      </div>
      <div class="w3-third">
        <p>Food and Beverages</p>
        <p><img src="Images/fb.jpg" class="w3-round w3-margin-bottom" height="205" alt="Random Name" style="width:80% ">          </p>
        <p><a href="fbmore.php" class="w3-hover-red" style="display: none;">More</a></p>
      </div>
      <div class="w3-third">
        <p>Services</p>
        <p>Edit Page</p>
        <table width="332" border="1" align="center">
          <tr>
            <td><form action="<?php echo $editFormAction; ?>" method="POST" name="EditPageForm" id="EditPageForm">
              <table width="166" border="1" align="center">
                <tr>
                  <td height="115"><span id="sprytextarea1">
                    <label for="PageContent"></label>
                    Page Content:<br>
                    <textarea name="PageContent" id="PageContent" cols="40" rows="5"><?php echo $row_EditPage['PageContent']; ?></textarea>
                    <span class="textareaRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><input type="submit" name="Update" id="Update" value="Update Page">
                    <input name="IDhiddenField" type="hidden" id="IDhiddenField" value="<?php echo $row_EditPage['ID']; ?>"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
              <input type="hidden" name="MM_update" value="EditPageForm">
            </form></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p><a href="smore.php" class="w3-hover-red" style="display: none;">More</a></p>
      </div>
    </div>
  </div>

  <!-- The Reservation Section --
  <div class="w3-black" id="reservations">
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">RESERVATIONS</h2>
      <p class="w3-opacity w3-center"><i>Here are the rooms available to you for booking</i></p><br>  
      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">Single Rooms <span class="w3-tag w3-red w3-margin-left">Check the Availability</span></li>
        <li class="w3-padding">Double rooms <span class="w3-tag w3-red w3-margin-left">Check the Availability</span></li>
      </ul>
    </br>
  </br>
      <a href="addcico.php" class="w3-hover-red">Click Here To Reserve Your Room Today</a>

    </div>
  </div>

  <!-- The Contact Section --
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contactus">
    <h2 class="w3-wide w3-center">CONTACT US</h2>
    <p class="w3-opacity w3-center"><i>Don't forget to leave a message</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i>Main Street,Arugam Bay,Pottuvil,Sri Lanka<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +94-72574118<br>
        
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content --
</div>
<!-- Add Google Maps --

<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.41620457236!2d81.83044731477251!3d6.8406029950562965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae5bd255f5c3731%3A0x1ab3c6b9f1551612!2sTanzanite+Beach+view+Hotel!5e0!3m2!1sen!2slk!4v1531975567617" width="600" height="450" frameborder="" style="border:1"></iframe></p>

<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
</footer>
-->
<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>

</body>
</html>
<?php
mysql_free_result($EditPage);
?>
