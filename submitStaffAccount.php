<!--referred from labsheets-->

<?php
    include_once'config.php';
?>

<?php
    $name=$_POST["field1"];
	$gender=$_POST["field5"];
	$dob=$_POST["field6"];
	$address=$_POST["field2"];
	$email=$_POST["field3"];
	$phone_no=$_POST["field4"];
	
	
	//insert data to the table
	$sql="insert into addstaff(staffID,Name,Gender,DOB,Address,Email,Phone_no) values('','$name','$gender','$dob','$address','$email','$phone_no')";
	
	
	//execute the query
	if(mysqli_query($conn,$sql)){
    echo "<script>alert('record insert successfully')</script> ";
	//direct to where
	header("Location:staffAccount.php");
  }
  else{
    echo "<script>alert('Error!!')</script> ";
  }
	
	//close the connection
	mysqli_close($conn);


?>