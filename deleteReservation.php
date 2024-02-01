<?php
//linking configuration file
include_once 'config.php';
?>

<?php

    $rID = $_GET['rID'];
	
	$query = "delete from reservation where Reservation_ID = '$rID'";
	
	$data = mysqli_query($conn,$query);
	
	if($data){
			echo"<script>alert('Record deleted')</script>";
				//direct to where
	    header("Location:reservationaccount.php");
		}else{
			echo"<script>alert('error')</script>";
		
		}		
	
    mysqli_close($conn);


?>
