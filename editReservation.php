<?php
include_once 'config.php';
?>

<?php

    $Reservation_ID = $_GET['rID'];
	$name = $_GET['name'];
	$pdate = $_GET['pdate'];
	$ptime = $_GET['ptime'];
	$rdate = $_GET['rdate'];
	$rtime = $_GET['rtime'];

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Styles/styles.css">

    <!--footer stylesheet icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!--font-awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


</head>
<body>
	  <!-- add a horizontal menu bar --> 
	  
    <div class="navbar">
        
        <a href="home page.html">Home</a>
        <a href="login.php">Login</a>
        <div class="servicebtn">
            <button class="dropbtn">Service
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="servicebutton-content">
                <a href="services.php">Select vehicle</a>
            </div>
            
        </div>

        <div class="profilesbtn">
            <button class="dropbtn">Profiles
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="profilesbutton-content">
                <a href="register.php">Create an account</a>
                <a href="user.php">User account</a>
                <a href="Vehicle_owner.php">Vehicle owner account</a>
                <a href="adminpage.html">Admin account</a>
            </div>
        </div>

        <div class="aboutusbtn">
            <button class="dropbtn">About us
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="aboutusbutton-content">
                <a href="Terms and conditions.php">Terms & Conditions</a>
                <a href="Privacy & Policy page.html">Privacy & Policy</a>
                </div>
            </div>
        <a href="contactUs.html">Contact Us</a>
    </div>
	  
	  <br><br><br><br><br><br><br><br><br><br> 

	<div>
	<form action="EditReservation.php" method="GET" name="form2">

	<table border="0" width="25%">

	<tr>
	<td>Reservation_ID</td>
	<td><input type="text" value="<?php echo "$Reservation_ID"?>" name="field0" readonly></td>
	</tr>
	
	
	
	<tr>
	<td>Customer_name</td>
	<td><input type="text" value="<?php echo "$name"?>" name="field1"></td>
	</tr>
	
	
	<tr>
	<td>Pickup_date</td>
	<td><input type="date" value="<?php echo "$pdate"?>" name="field2"></td>
	</tr>
	
	<tr>
	<td>Pickup_time</td>
	<td><input type="time" value="<?php echo "$ptime"?>" name="field3"></td>
	</tr>
	
	<tr>
	<td>Return_date</td>
	<td><input type="date" value="<?php echo "$rdate"?>" name="field4"></td>
	</tr>
	
    <tr>
	<td>Return_time</td>
	<td><input type="time" value="<?php echo "$rtime"?>" name="field5"></td>
	</tr>

	<tr>
	<td></td>
	<td><input type="submit" value="update" name="submit"></td>
	</tr>
	
	</table>
	</form>
	</div>
	  
	  <br><br><br><br><br><br><br><br><br><br>
	
<!--footer-->
    <footer>
    <div class="foot">
        <div class="footer">
            <div class="row">
                <dic class="col" id="company">

                    <img src="Images/logo.png" alt="" class="logo"><br>

                    <p>"With the help of our amazing rental fleet, unleash your trip. <br> Go off exploring!"</p>
                    
                    <div class="social"><br>
                        <a href="www.facebook.com"><i class="fab fa-facebook"></i></a>
                        <a href="www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a href="www.youtube.com"><i class="fab fa-youtube"></i></a>
                    </div>

                </div>

                <div class="col" id="useful-links"><br>
                    <h3>Links</h3>
                    <div class="link">
                        <a href="About us.php">About us</a>
                        <a href="services.php">Services</a>
                        <a href="Privacy & Policy page.html">Privacy and Policy</a>
                        <a href="Terms and conditions.php">Terms and condditions</a>
                        <a href="contactUs.html">Contact us</a>
                    </div>
                </div>

                <div class="col" id="contacts"><br>
                    <h3>Contact</h3>
                    <div class="contact-details">
                        <p>Address :<br> 70/5,  Post Office Road,  Malabe</p><br>
                        <p><i class="material-icons">call</i>+94-112345678</p>
                        <p><i class="material-icons">email</i>TravelLine.SriLanka@email.com</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </footer>

  
</body>
</html>
