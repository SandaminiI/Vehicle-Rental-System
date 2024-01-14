<!--referred from labsheets-->

<?php
include_once'config.php';
?>

<?php
    if($_GET['submit']){
		$id = $_GET['field0'];
		$name = $_GET['field1'];
		$address = $_GET['field2'];
		$email = $_GET['field3'];
		$phone = $_GET['field4'];
		
		$query = "UPDATE addstaff SET 
		     
			 Name = '$name',
			 Address = '$address',
			 Email = '$email',
			 Phone_no = '$phone' WHERE
			 
			 staffID = '$id' ";
			 
			 
		$data = mysqli_query($conn,$query);

        if($data){
			echo"<script>alert('Record updated')</script>";
		//direct to where
	    header("Location:staffAccount.php");
		}else{
			echo"<script>alert('error')</script>";
		
		}		
	}
    mysqli_close($conn);

?>