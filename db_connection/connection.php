<?php
    $servername="localhost";
	$username = "root";
	$dbpass = "";
	$db_name = "bike_service";
	
	$conn = mysqli_connect($servername, $username, $dbpass,$db_name);
	
	if($conn){
		//echo "Successfully Connected to database";
	}else {
		echo "Some error while connecting database.";
		die("error is: ".mysqli_connect_error());
	}
?>

