<?php  //reffered from labsheets
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "vehicle_rental_system";
   
// Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   
// Check connection
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
     }
   
?> 

	
