<?php
include_once'config.php';
?>

<!DOCTYPE html>
<html>
<head>

    <title>Staffaccount</title>
	
	<!-- link CSS styles for header and footer-->
    <link rel="stylesheet" type="text/css" href="Styles/styles.css">
	
	<!--link stylesheet for body-->
    <link rel="stylesheet" type="text/css" href="Styles/staff.css">
	
	<!--footer stylesheet icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!--font-awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>

<!--header-->
<!-- add a horizontal menu bar --> 
                
                <div class="navbar">
                    
                    <a href="home page.html">Home</a>
                    
					<div class="profilesbtn">
                        <button class="dropbtn">Login
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="profilesbutton-content">
                            <a href="login.php">Customer login</a>
                            <a href="login_vehicleowner.php">Vehicle owner login</a>
							<a href="#">Admin login</a>
                        </div>
                    </div>
					
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
	 &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	 
	<button class="button"><a href = "addNewStaff.php">Add new staff</a></button>
	  
	<br><br><br>
	  
	<center>
	  <h1>Staff Account Details</h1>
	
	<br><br>
	  
	<table border="1" width="95%">
	<tr>
	    <th class="col1">StaffID</th>
	    <th class="col1">Name</th>
	    <th class="col1">Gender</th>
	    <th class="col1">DOB</th>
	    <th class="col1">Address</th>
	    <th class="col1">Email</th>
	    <th class="col1">Phone_no</th>
	    <th class="col1">Edit</th>
	    <th class="col1">Delete</th>
	</tr>
	  
	<!--referred from labsheets-->
	<?php
	  
	    $sql="select * from addstaff";
	    $result=$conn->query($sql);
	  
	    if($result->num_rows>0){
		    while($row=$result->fetch_assoc()){
			    echo"<tr><td>".$row["staffID"]."</td><td>".$row["Name"]."</td><td>".$row["Gender"]."</td><td>".$row["DOB"]."</td><td>".$row["Address"]."</td><td>".$row["Email"].
			  "</td><td>".$row["Phone_no"]."</td>";
			  
			    echo"<td><center><button><a href='editstaff.php? ID=$row[staffID]&name=$row[Name]&gender=$row[Gender]&dob=$row[DOB]&address=$row[Address]&email=$row[Email]&phone=$row[Phone_no]'>Update</a></button></center></td>";
			    echo"<td><center><button><a href='deletestaff.php ? id=$row[staffID]'>Delete</a></button></center></td><tr>";
			 
		    }
		    }else{
			  echo"Empty rows";
	         }
	    echo "</table>";
	  
	    mysqli_close($conn);
	  
	?>
	  
	  
	  
	</center>
	 
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
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
                        <a href="contact Us.html">Contact us</a>
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
	
	
