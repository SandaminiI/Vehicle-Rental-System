<!DOCTYPE html>
<html>
<head>

    <title>Register</title>
	
	<!-- link CSS styles for header and footer-->
    <link rel="stylesheet" type="text/css" href="Styles/styles.css">
	
	<!--link stylesheet for body-->
    <link rel="stylesheet" type="text/css" href="Styles/register.css">
	
	<!--footer stylesheet icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!--font-awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	
	<!--link javascript file-->
    <script src="Scripts/register.js"></script>
	
</head>

<body>

<!--header-->
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
	 
	<br><br><br><br><br><br><br>
	
	<!--create Registration form-->	
	
	<div class="container">
    <center> 
        <h2>  Vehicle Owner Registration </h2> <!-- reffered from labsheets-->
    </center>
	
	<br><br>
        
    <form class="form1" action="submitVehicleOwnerRegistration.php" method="POST" onsubmit="return checkPassword()">
	
			
            <label for="fname">First name:</label><br>
            <input type="text" class="name" placeholder="First Name" name="fname" required>
			<br><br>
			
            <label for="lname">Last name:</label><br>
            <input type="text" class="name" placeholder="Last Name" name="lname" required>
			<br><br>

            <label for="gender">Gender</label><br>
            <input type="radio" name="gender" value="Male" > Male
            <input type="radio" name="gender" value="Female"> Female
            <br><br>

            Mobile number : <br/>
            <input type="phone" name="mobile" pattern="[0-9]{10}" placeholder="0712345678" required>
			
			<br/><br>

            Email Address : <br/>
            <input type="email" name="email" pattern="[a-z0-9.-+_%]+@[a-z0-9.-]+\.[a-z]{2,3} " placeholder="example@gmail.com" required>
			
			<br/><br>

            Address : <br/>
            <textarea name="address" rows="8" cols="50" required></textarea>
			
			<br/><br>

            Date Of Birth : <br/>
            <input type="date" name="dob"  required>
			
			<br/><br>

            <label for="username">Username:</label><br>
            <input type="text" class="name" placeholder="Username" name="uname" pattern="{5,15}"required>
			
			<br><br>

            Password : <br>
            <input type="password" name="pwd" id="pwd" pattern="(!@#$%^&*?/\)(?=.+[a-z])(?=.+[A-Z]).{5,15}" required>
			
			<br/><br>
			
            Re-Enter Password : <br>
            <input type="password" name="cnfrmpwd" id="cnfrmpwd" pattern="(!@#$%^&*?/\)(?=.+[a-z])(?=.+[A-Z]).{5,15}" required>
			
			<br/><br/>
			
			<label for="profile pic">Upload profile picture : </label><br>
	        <center><input type="file" id="profile" name="profile"></center>
			
			<br><br>

            <input type="checkbox" class="inputStyle" id="checkbox" onclick="enableButton()">Accept Privacy Policy and Terms.<br/><br>

            <center><input type="submit" id="submitBtn" value="submit" disabled></center>
		
			<br>
			
		    <div><p align="center">Already have an account <a href="login_vehicleowner.php">Login</a></p></div>
            
    </form>
    
	</div>
    
	<br><br><br><br><br><br><br><br><br><br>
	
	
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