<!--referred from labsheets-->

<?php 
  include_once 'config.php';
?>

<?php 
 
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $dob = $_POST['dob'];
  $uname = $_POST['uname'];
  $pwd = $_POST['pwd'];
  $profile = $_POST['profile'];

  //insert values
  $sql ="INSERT INTO register(CID,firstName, lastName, gender, mobile, email, address, dob, uname, pwd, profile) 
  VALUES(' ','$fname','$lname','$gender','$mobile','$email','$address','$dob','$uname','$pwd','$profile')";
  
  //execute  the query
  if(mysqli_query($conn,$sql)){
    echo "<script>alert('submitted successfully')</script> ";
	//direct to where
	header("Location:home page.html");
  }
  else{
    echo "<script>alert('submit failed!!')</script> ";
  }
  
  //close the connection
  mysqli_close($conn);
  
  

  
?>
