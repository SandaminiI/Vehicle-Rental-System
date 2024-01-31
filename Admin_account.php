<?php
//linking configuration file
include_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css"	href="Styles/styles.css">
<link rel="stylesheet" type="text/css"	href="Styles/admin.css">

	
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
	  <br><br><br><br><br><br>
	
	
				
	 <center>
	  <h2>Admin Information</h2>
	  <br>
	  <table border="1" width="95%">
	  <tr>
	  <th class="col1">Admin_ID</th>
	  <th class="col1">User_name</th>
	  <th class="col1">Email</th>
	  <th class="col1">Phone_number</th>
	  <th class="col1">Password</th>
	  <th class="col1">Update</th>
	  <th class="col1">Delete</th>
	  </tr>
	  
	  <?php
	  
	  $sql="select * from admin_info";
	  $result=$conn->query($sql);
	  
	  if($result->num_rows>0){
		  while($row=$result->fetch_assoc()){
			  echo"<tr><td>".$row["admin_ID"]."</td><td>".$row["user_name"]."</td><td>".$row["email"]."</td><td>".$row["phone_number"]."</td><td>".$row["password"].
				  "</td>";
			  
			  echo"<td><center><button><a href='Edit_admin_account.php?aID=$row[admin_ID]&name=$row[user_name]&email=$row[email]&pnumber=$row[phone_number]&pword=$row[password]'>Update</a></button></center></td>";
			  echo"<td><center><button><a href='Delete_adminInfo.php?aID=$row[admin_ID]'>Delete</a></button></center></td><tr>";
			 
		  }
		  }else{
			  echo"Empty rows";
	  }
	  echo "</table>";

	  //close the connection  
	  mysqli_close($conn);
	  
	  ?>
	  
	</center>
    
	<br><br><br><br><br><br><br><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp
	<!--staff details-->
	<button class="button"><a href="staffAccount.php">Staff Accounts</a></button>
	 
	 <br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	  
        <!--footer-->
 <footer>
    <div class="foot">
        <div class="footer">
            <div class="row">
                <dic class="col" id="company">

                    <img src="Images/logo.png" alt="" class="logo"><br>

                    <p>"With the help of our amazing rental fleet, unleash your trip. <br> Go off exploring!"</p>
                    
                    <div class="social"><br>
                        <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
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
