<?php
include("../db_connection/connection.php");
if(isset($_POST['login_admin'])) {
	$username = $_POST['uname'];
	$password = $_POST['psw'];
		
	if($username != "" && $password != ""){
		$query = "SELECT * FROM admin WHERE user_id = '$username' AND password = '$password'";
		$data = mysqli_query($conn, $query);
		
		if($data){
			$row = mysqli_fetch_assoc($data);
			$access_type = $row['access_type'];
			
			session_start();
			$_SESSION['user_id'] = $username; 
			$_SESSION['access_type'] = $access_type;
			
			header('location:index.php');
		}else{
			echo "<br><span style='color: red'> Failed to login</span>";
			echo "<br><span style='color: red'> Error is: ".mysqli_error($conn)."</span>";
		}		
	}else 
		echo "<span style='color: red'>All fields are mandatory.</span>";

}
?>