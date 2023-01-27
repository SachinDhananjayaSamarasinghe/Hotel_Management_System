<?php
    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: cicoinfo.php");
    }
     
    if ( !empty($_POST)) {
       
         
        // keep track post values
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $booking_from = $_POST['booking_from'];
        $booking_upto = $_POST['booking_upto'];
        $restype = $_POST['restype'];
        $rooms = $_POST['rooms'];
        $room_no = $_POST['room_no'];
        $no_of_guests = $_POST['no_of_guests'];
        $meals = $_POST['meals'];
        $booked = $_POST['booked'];

         
        // validate input
        $valid = true;
    
         
        // update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE room_bookings2  set Name = ?, Email = ?, Phone = ?,  Country = ?, Booking_From = ?, Booking_Upto =?, rowData1 = ?, rowData3 = ?, rowData10 = ?, No_of_Guests = ?, Meals =?, Status =? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$email,$phone,$country,$booking_from,$booking_upto,$restype,$rooms,$room_no,$no_of_guests,$meals,$booked,$id));
            Database::disconnect();
            header("Location: cicoinfo.php");
        }
    } 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Adding Reservation Details</title>
    <style>
     a{

    background-color: dodgerblue;
    color: white;
    padding: 8px 70px;
    border: none;
    cursor: pointer;
    width: 100%;
    font-size: 20px;
    opacity: 0.9;

    }


.w3-ul{
    list-style-type:none;padding:0;
    margin:0
    }
.w3-ul li{
    padding:8px 16px;
    border-bottom:1px solid #fff
        }
.w3-ul li:last-child{
    border-bottom:none
        }

.w3-tag{
    background-color:#fff;
    color:#fff;
    display:inline-block;
    padding-left:8px;padding-right:8px;
    text-align:center
    }

.w3-border{
    border:1px solid #ccc!important
    }
.w3-margin-left{
    margin-left:16px!important
    }
.w3-padding{
    padding:12px 16px!important
    }
.w3-red,.w3-hover-red:hover{
    color:red!important;
    background-color:yellow!important
}
.w3-white{
    color:#000!important;
    background-color:#fff!important
}
.w3-text-grey{
    color:black!important
}
.btn{
    background-color: dodgerblue;
    color: white;
    padding: 7px 20px;
    border: none;
    cursor: pointer;
    width: 100px;
    font-size: 20px;
    opacity: 0.9;
}

.btn:hover{
    opacity:1;
}
</style>
</head>
<body>

    <h1>Update room reservation details</h1>

<!--
    <ul class="w3-ul w3-border w3-white ">
      <li class="w3-padding"><strong  style="color: red">Please check the availability before make a reservation</strong> <span class="w3-tag w3-red w3-margin-left" ><a style="text-decoration: none;" href="cax.php"  class="w3-hover-red">Check the Availability</a></span></li>
      </ul>
  -->

    <form action="updateres.php?id=<?php echo $id?>" method="POST">
        <fieldset>
        <legend><strong>Personal Details</strong></legend>
        <table>
            <tr>
                <td>
                    Name :
                </td>
                <td>
                    <input type="text" placeholder='Your Name' name="name" required>
                </td>
            </tr>
            <br>

            <tr>
                <td>
                    Email :
                </td>
                <td>
                    <input type="email" placeholder="Your Email" name="email" required>
                </td>
            </tr>

            <tr>
                <td>
                    Phone :
                </td>
                <td>
                    <input type="text" placeholder="Your Phone Number" name="phone" required>
                </td>
            </tr>

            <tr>
                <td>
                    Country :
                </td>
                <td>
                    <select name="country" required>
                        <option value=""> </option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
        </table>
            </fieldset>
<br>
            <fieldset>
                <legend><strong>Booking Details</strong></legend>
                <table>
                    <br>

            <tr>
                <td>
                    Booking From :
                </td>
                <td>
                    <input type="date" name="booking_from" min="2018.11.17">
                </td>
            </tr>

            <tr>
                <td>
                    Booking Upto :
                </td>
                <td>
                    <input type="date" name="booking_upto" >
                </td>
            </tr>

            <tr>
                <td>
                    Room Type :
                </td>
                <td>
                    <input type="radio" name="rooms" value="1">Single Bed Room
                    <input type="radio" name="rooms" value="2">Double Bed Room </br>
                </td>
            </tr>

            <tr>
                <td>
                    Room Number :
                </td>
                <td>
                    <input type="number" name="room_no" min="1" max="10">
                </td>
            </tr>


            <tr>
                <td>
                    Number of Guests :
                </td>
                <td>
                    <input type="number" name="no_of_guests" min="1" max="4">
                </td>
            </tr>

                <tr>
                <td>
                    Do You Reqiure Meals?
                </td>
                <td>
                    <input type="radio" name="meals" value="yes meals">Yes
                    <input type="radio" name="meals" value="no meals">No
                </td>
            </tr>

            

        </table>

        <table>
            <br>
            <tr>
                <td>
                
                </td>

            
                <th style="display: none;">
                    <input type="checkbox" name="restype" value="2" required checked="checked">Check this to ensure this is a front desk booking.
                </th>
            </tr>

        </table>

        <table>
            <tr>
                <td>
                
                </td>

            
                <th style="display: none;">
                    <input type="checkbox" name="booked" value="Booked" required checked="checked">I will accept the alterations in the charges & taxes during the stay.
                </th>
            </tr>
        </table>
            <input type="image" src="Images/button.png" alt="submit">

                     <div style="padding: 0px 30px; width: 500px;">
                            <a style="text-decoration: none;" href="cicoinfo.php">Back</a>
                        </div>
            </fieldset>

    </form>
                    
                </div>
                 
    </div> <!-- /container -->
  
  </body>
</html>