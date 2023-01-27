<?php require_once('../Connections/localhost4.php'); ?>
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

mysql_select_db($database_localhost4, $localhost4);
$query_Recordset3 = "SELECT * FROM pages ORDER BY `Timestamp` ASC";
$Recordset3 = mysql_query($query_Recordset3, $localhost4) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);
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
<body>

</div>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <h3 class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="text-align: left;">Tanzanite Beach View Hotel</h3>
    <a style="text-decoration: none;margin-top: 20px;" href="login.html" class= "w3-padding-large w3-hover-red w3-hide-small w3-right" >LOGIN</a>
    <a href="#contactus" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right" style="margin-top: 20px;">CONTACT US</a>
    <a href="#reservations" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right" style="margin-top: 20px;">RESERVATIONS</a>
    <a href="#packages" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right" style="margin-top: 20px;">PACKAGES</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-right" style="margin-top: 20px;">HOME</a>
    
    
    
    

  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#contactus" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT US</a>
  <a href="#reservations" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">RESERVATIONS</a>
  <a href="#packages" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PACKAGES</a>
  
</div>

<!-- Page content -->
<div class="w3-content w3-text-grey" style="max-width:2000px; margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center  ">
    <img src="Images/welcome22.jpg" style="width:100%">
    <div class="w3-display-top w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3 class="w3-text-black">We Welcome You Warm Heartly</h3>
      <p class="w3-text-black"><b>To The Hotel Of Choice Among Travelers</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="Images/service1.jpg" style="width:100%">
    <div class="w3-display-top w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>We Serve You</h3>
      <p><b>With Our Utmost Professionalism </b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="Images/break22.jpg" style="width:100%">
    <div class="w3-display-top w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3 class="w3-text-black">We Provide The Best Breakfast</h3>
      <p class="w3-text-black"><b>As The Human Happiness Starts With It</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/l22.jpg" style="width:100%">
    <div class="w3-display-top w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>We Got An Unique Lunch For You In A Sri Lankan Style</h3>
      <p ><b>That Makes Us Special</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/dinner1.jpg" style="width:100%">
    <div class="w3-display-top w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>We Makes Your Dinner </h3>
      <p><b>Makes You Feel That You Belong To The Class Of Royals</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/d55.jpg" style="width:100%">
    <div class="w3-display-top w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3  class="w3-text-black">We Got The Most Delicious Desserts </h3>
      <p  class="w3-text-black"><b>That Makes You Mouth Watering Even By Seen Them</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/t22.jpg" style="width:100%">
    <div class="w3-display-top w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3  class="w3-text-black">We Makes Your Evening Lively</h3>
      <p  class="w3-text-black"><b>With A Warm Cup Of High Quality Sri Lankan Tea</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/room1.jpg" style="width:100%">
    <div class="w3-display-top w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3 class="w3-text-black">We Give You The Best Rooms</h3>
      <p class="w3-text-black"><b>makes You Wake Up As Near As To The Beach</b></p>    
    </div>
  </div>


  <div class="mySlides w3-display-container w3-center">
    <img src="Images/wash33.jpg" style="width:100%">
    <div class="w3-display-top w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3 class="w3-text-black">We Provide Handfull Of Services</h3>
      <p class="w3-text-black"><b>Free Of Charge & With Some Attractive Packages </b></p>    
    </div>
  </div>


  <div class="mySlides w3-display-container w3-center">
    <img src="Images/diving22.jpg" style="width:100%">
    <div class="w3-display-top w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>You Can Enjoy Diving In The Arugam Bay</h3>
      <p ><b>Which Is Tourists Most Favourite In The Island </b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/sunbathing33.jpg" style="width:100%">
    <div class="w3-display-top w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3 class="w3-text-black">You Can Have A Warm Sunbath In the Arugam Bay Beach</h3>
      <p class="w3-text-black"><b>That Makes Your Life Refresh & Healthy </b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/surfing11.jpg" style="width:100%">
    <div class="w3-display-top w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3 class="w3-text-black">You Can Surf Allday Along On The Arugam Bay Waves</h3>
      <p class="w3-text-black"><b>Which Is One Of The Best For The Business</b></p>    
    </div>
  </div>

  <div class="mySlides w3-display-container w3-center">
    <img src="Images/w33.jpg" style="width:100%">
    <div class="w3-display-top w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>You Can Enjoy Wildlife With A Safarie To The Jungle</h3>
      <p><b>That Will Completes A Highly Entertaining & Adventureous Journey</b></p>    
    </div>
  </div>
  <!-- The Packages Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:1100px" id="packages">
    <h2 class="w3-wide">PACKAGES</h2>
    <p class="w3-opacity"><i>Make sure the best that suits to you</i></p>
  </br>
    <p class="w3-justify">Here are the packages and promotions availabe for you</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Rooms</p>
        <p><img src="Images/R1.jpg" class="w3-round w3-margin-bottom" height="205" alt="Random Name" style="width:80% ">          </p>
        <p><a href="rmore.php" class="w3-hover-red">More</a></p>
      </div>
      <div class="w3-third">
        <p>Food and Beverages</p>
        <p><img src="Images/fb.jpg" class="w3-round w3-margin-bottom" height="205" alt="Random Name" style="width:80% ">          </p>
        <p><a href="fbmore.php" class="w3-hover-red">More</a></p>
      </div>
      <div class="w3-third">
        <p>Services</p>
        <p><img src="Images/wash2.jpg" alt="Random Name" height="221" class="w3-round" style="width:80% ">          </p>
        <p><a href="smore.php" class="w3-hover-red">More</a></p>
      </div>
      <div class="w3-third">
        <p>Spa facilities</p>
        <p><img src="Images/wash2.jpg" alt="Random Name" height="221" class="w3-round" style="width:80% ">          </p>
        <?php if ($totalRows_Recordset3 > 0) { // Show if recordset not empty ?>
          <?php do { ?>
            <p><a href="sub.php?ID=<?php echo $row_Recordset3['ID']; ?>" class="w3-hover-red"><?php echo $row_Recordset3['PageName']; ?></a></p>
            <?php } while ($row_Recordset3 = mysql_fetch_assoc($Recordset3)); ?>
          <?php } // Show if recordset not empty ?>
      </div>
    </div>
  </div>

  <!-- The Reservation Section -->
  <div class="w3-black" id="reservations">
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">RESERVATIONS</h2>
      <p class="w3-opacity w3-center"><i>Here are the rooms available to you for booking</i></p><br>  
      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">Single Bed Rooms <span class="w3-tag w3-red w3-margin-left" ><a style="text-decoration: none;" href="cax.php"  class="w3-hover-red">Check the Availability</a></span></li>
        <li class="w3-padding">Double Bed rooms <span class="w3-tag w3-red w3-margin-left" ><a style="text-decoration: none;" href="cad.php"  class="w3-hover-red">Check the Availability</a></span></li>
      </ul>
    </br>
  </br>
      <a href="addcico.php" class="w3-hover-red">Click Here To Reserve Your Room Today</a>

    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contactus">
    <h2 class="w3-wide w3-center">CONTACT US</h2>
    <p class="w3-opacity w3-center"><i>Don't forget to leave a message</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i>Main Street,Arugam Bay,Pottuvil,Sri Lanka<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +94-72574118<br>
        
      </div>
      <div class="w3-col m6">
        <form action="fb.inc.php" method ="POST">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>
<!-- Add Google Maps -->

<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.41620457236!2d81.83044731477251!3d6.8406029950562965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae5bd255f5c3731%3A0x1ab3c6b9f1551612!2sTanzanite+Beach+view+Hotel!5e0!3m2!1sen!2slk!4v1531975567617" width="600" height="450" frameborder="" style="border:2"></iframe></p>

<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
</footer>

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

</script>

</body>
</html>
<?php
mysql_free_result($Recordset3);
?>
