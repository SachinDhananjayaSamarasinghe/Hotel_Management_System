<html>
<head>
	<title>Adding Reservation Details</title>
	<style>

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
</style>
</head>
<body>

	<h1>Welcome To Front Desk Room Reservation</h1>

	<form action="Includes/addcico.inc.php" method="POST">
		<ul class="w3-ul w3-border w3-white ">
        <li class="w3-padding"><strong  style="color: red">Please check the availability before make a reservation</strong> <span class="w3-tag w3-red w3-margin-left" ><a style="text-decoration: none;" href="cax.php"  class="w3-hover-red">Check the Availability</a></span></li>
      </ul>
		<br>
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
					<input type="date" name="booking_from" min="2018.06.02">
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
   			<tr>
				<td>
				
				</td>

			
				<th style="display: none;">
					<input type="checkbox" name="restype" value="2" required checked="checked" >Check this to ensure this is a front desk booking.
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
			</fieldset>

	</form>

</body>
</html>