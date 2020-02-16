<?php
include("../db_connection/connection.php");
if(isset($_POST['login_admin'])) {
	$username = $_POST['username'];
	$password = $_POST['pass'];
		
	if($username != "" && $password != ""){
		$query = "SELECT * FROM admin WHERE user_id = '$username' AND password = '$password'";
		$data = mysqli_query($conn, $query);
		
		if(mysqli_num_rows($data) > 0){
			$row = mysqli_fetch_assoc($data);
			$access_type = $row['access_type'];
			
			session_start();
			$_SESSION['user_id'] = $username; 
			$_SESSION['access_type'] = $access_type;
			
			header('location:dashboard.php');
		}else{
			session_start();
			$_SESSION['msg'] = "Username or password is wrong"; 
			echo "<br><span style='color: red'> Failed to login</span>";
			echo "<br><span style='color: red'> Error is: ".mysqli_error($conn)."</span>";
			header('location:index.php');
		}		
	}else 
		echo "<span style='color: red'>All fields are mandatory.</span>";

}
?>