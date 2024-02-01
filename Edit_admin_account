<?php
include_once 'config.php';
?>

<?php

    $admin_ID = $_GET["aID"];
	$name = $_GET["name"];
	$email = $_GET["email"];
	$pnumber = $_GET["pnumber"];
	$pword = $_GET["pword"];

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css"	href="Styles/styles.css">

</head>
<body>
	  <!-- add a horizontal menu bar --> 
	  
    <div class="navbar">
        
        <a href="#">Home</a>
        <a href="#">Login</a>
        <div class="servicebtn">
            <button class="dropbtn">Service
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="servicebutton-content">
                <a href="#">Select vehicle</a>
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
                <a href="admin page.php">Admin account</a>
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
        <a href="contactUs.htnl">Contact Us</a>
</div>
	  
	  <br><br><br><br><br><br><br><br><br><br> 

	<div>
	<form action="SubmitEditAdminInfo.php" method="GET" name="form2">

	<table border="0" width="25%">

	<tr>
	<td>Admin_ID</td>
	<td><input type="text" value="<?php echo "$admin_ID"?>" name="field0" readonly></td>
	</tr>
	
	
	
	<tr>
	<td>User_name</td>
	<td><input type="text" value="<?php echo "$name"?>" name="field1"></td>
	</tr>
	
	
	<tr>
	<td>Email</td>
	<td><input type="email" value="<?php echo "$email"?>" name="field2"></td>
	</tr>
	
	<tr>
	<td>Phone_number</td>
	<td><input type="text" value="<?php echo "$pnumber"?>" name="field3"></td>
	</tr>
	
	<tr>
	<td>Password</td>
	<td><input type="text" value="<?php echo "$pword"?>" name="field4"></td>
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

                    <img src="images/logo.png" alt="" class="logo"><br>

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
                        <a href="Terms and conditions.php">Terms and conditions</a>
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
