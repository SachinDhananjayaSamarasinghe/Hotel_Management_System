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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "SelectSectionForm")) {
  $insertSQL = sprintf("INSERT INTO pages2 (PageName) VALUES (%s)",
                       GetSQLValueString($_POST['NewPage'], "text"));

  mysql_select_db($database_localhost2, $localhost2);
  $Result1 = mysql_query($insertSQL, $localhost2) or die(mysql_error());

  $insertGoTo = "SelectSection2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST['DeleteSectionhiddenField'])) && ($_POST['DeleteSectionhiddenField'] != "")) {
  $deleteSQL = sprintf("DELETE FROM pages2 WHERE ID=%s",
                       GetSQLValueString($_POST['DeleteSectionhiddenField'], "int"));

  mysql_select_db($database_localhost2, $localhost2);
  $Result1 = mysql_query($deleteSQL, $localhost2) or die(mysql_error());

  $deleteGoTo = "SelectSection2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

mysql_select_db($database_localhost2, $localhost2);
$query_pages = "SELECT * FROM pages2";
$pages = mysql_query($query_pages, $localhost2) or die(mysql_error());
$row_pages = mysql_fetch_assoc($pages);
$totalRows_pages = mysql_num_rows($pages);
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
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
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
        
      </div>
      <div class="w3-third">
        <p>Food and Beverages</p>
        <p><img src="Images/fb.jpg" class="w3-round w3-margin-bottom" height="205" alt="Random Name" style="width:80% ">          </p>
      
      </div>
      <div class="w3-third">
        <p>Services</p>
        <table width="332" border="1" align="center">
          <tr>
            <td><form action="<?php echo $editFormAction; ?>" method="POST" name="SelectSectionForm" id="SelectSectionForm">
              <table border="1" align="center">
                <tr>
                  <td><span id="sprytextfield1">
                    <label for="NewPage"></label>
                    <input type="text" name="NewPage" id="NewPage">
                    <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                  <td><input type="submit" name="AddPageButton" id="AddPageButton" value="Select Section"></td>
                </tr>
              </table>
              <input type="hidden" name="MM_insert" value="SelectSectionForm">
            </form></td>
          </tr>
        </table>
        <table width="332" border="1" align="center">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><?php if ($totalRows_pages > 0) { // Show if recordset not empty ?>
                <?php do { ?>
                  <table width="264" border="1" align="center">
                    <tr>
                      <td width="124"><?php echo $row_pages['PageName']; ?></td>
                      <td width="124"><a href="EditPage2.php?ID=<?php echo $row_pages['ID']; ?>">Edit Page Content</a></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><form action="" method="post" name="DeleteSectionForm" id="DeleteSectionForm">
                        <input name="DeleteSectionhiddenField" type="hidden" id="DeleteSectionhiddenField" value="<?php echo $row_pages['ID']; ?>">
                        <input type="submit" name="DeleteSectionButton" id="DeleteSectionButton" value="Delete Section">
                      </form></td>
                    </tr>
                  </table>
                  <?php } while ($row_pages = mysql_fetch_assoc($pages)); ?>
                <?php } // Show if recordset not empty ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
  
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
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>

</body>
</html>
<?php
mysql_free_result($pages);
?>
