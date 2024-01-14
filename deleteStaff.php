<!--referred from labsheets-->
<?php
//Linking the configuration file
include_once'config.php';
?>

<?php

    $staff_id = $_GET['id'];
	
	//delete records
	$query = "delete from addstaff where staffID = '$staff_id'";
	
	$data=mysqli_query($conn,$query);
	
	if($data){
		echo"<script>alert('Record deleted')</script>";
		//direct to where
	    header("Location:staffAccount.php");
		}else{
			echo"<script>alert('error')</script>";
		
		}		
	
	//close the connection
    mysqli_close($conn);


?>