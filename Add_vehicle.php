<!DOCTYPE html>
<html>
<head>
	<title>Vehicle Rental System</title>
	
	<!-- Connection CSS code to HTML -->
	<link rel = "stylesheet" href="Styles/Add_vehicle.css">
	
	<link rel = "stylesheet" href="Styles/header.css">
	
	<link rel = "stylesheet" href="Styles/footer.css"> 
	
	<!--footer stylesheet icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!--font-awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	
	<!-- JavaScript in website -->
	<script>
		function myFunction() {
		  alert("Vehicle Details Added Succesfully!");
		}
	</script>
	
	
		
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
                            <a href="adminpage.php">Admin account</a>
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

<br><br><br><br><br>

<h3>ADD VEHICLE</h3>
	<!--Referred from Labsheet	-->
	<form action="submitvehicle.php" method ="POST">  <!-- php part  connection to form -->
	
		Select the vehicle category: 
		<select class="category" name="vehicle" id="vehicle" >
				<option disabled = "disabled" selected = "selected">Select</option>
				<option value = "Car"> Car </option>
				<option value = "Van"> Van </option>
				<option value = "Jeep"> Jeep </option>
				<option value = "Bus"> Bus </option>
				<option value = "Lorry"> Lorry </option>
				<option value = "Other"> Other </option>
			</select>
			<br/><br/>
		
		
	
		Vehicle Registration plate number:
			<input class="vehno" type="text" name="vehicleno" placeholder="Registration plate number" required>
		<br/><br/>
		
		Vehicle Model:		
			<input class="Model" type="text"  name="model" placeholder="Vehicle Model" required>
		<br/><br/>
		
		<p>Vehicle Description:</p>
			<textarea class="description" name="description" 	rows="3" cols="45"; required></textarea>
		<br/><br/>
	
		Price per hour:
			<td><input class="hour" type="text" name="hour" placeholder="Rs." required>
		<br/><br/>
		
		Price per day:
			<input class="day" type="text" name="day" placeholder="Rs." required>
		<br/><br/>
		
		Upload vehicle image:
			<input class="image" type="file" name="image" required>
	
		<!--Add vehicle Button reffered by w3 schools-->
			<input id="submit" type="submit" name="btnsubmit" value="   Add Vehicle   "  onclick="myFunction()"
			style="background-color:#d2945e; color:black;  border-radius:8px; border-color: #d2945e; font-size: 28px;font-family: Georgia; box-shadow:  0 0 50px #d2945e;  position: relative;
			 left:15%;"> <!--Adding styles using inline CSS  -->
			
	</form>


	
	
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	

<!--footer-->
    <footer>
    <div class="foot">
        <div class="footer">
            <div class="row">
                <dic class="col" id="company">

                    <img src="Images/logo.jpg" alt="" class="logo"><br>

                    <p>"With the help of our amazing rental fleet, unleash your trip. <br> Go off exploring!"</p>
                    
                    <div class="social"><br>
                        <a href="www.facebook.com"><i class="fab fa-facebook"></i></a>
                        <a href="www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a href="www.youtube.com"><i class="fab fa-youtube"></i></a>
                    </div>

                </div>

                <div class="col" id="useful-links"><br>
                    <p>Links</p>
                    <div class="link">
                        <a href="About us.php">About us</a>
                        <a href="services.php">Services</a>
                        <a href="Privacy & Policy page.html">Privacy and Policy</a>
                        <a href="Terms and conditions.php">Terms and condditions</a>
                        <a href="contactUs.html">Contact us</a>
                    </div>
                </div>

                <div class="col" id="contacts"><br>
                    <p>Contact</p>
                    <div class="contact-details">
                        <p>Address :70/5,  Post Office Road,  Malabe</p><br>
                        <p><i class="material-icons">call : </i>+94-112345678</p>
                        <p><i class="material-icons">email : </i>TravelLine.SriLanka@email.com</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </footer>
	  
</body>

</html>	  
