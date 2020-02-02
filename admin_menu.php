<?php
include("db_connection/connection.php");
error_reporting(0);
?>
<head>
   <title>Chetan's bike center</title>
   <link rel="stylesheet" type="text/css" href="css/bike_home.css">
</head>
<style>
#welcome {
	display: block;
	color: white;
	text-align: center;
	padding-right: 20px;
}
</style>
<body>
<script>
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
</head>
<body>
	<!-- header starts -->
	<ul class="top-menu">
		<li><a class="active" href="#home">Home</a></li>
		<li><a href="#" onclick="openNewWindow()">Book Appointment</a></li>
		<li><a href="contactus.php">Contact Us</a></li>
		<li><a href="profile.php">Show Profile</a></li>
		<li style="float:right"><a href="logout.php" id="logout_lnk" onclick="logout()">Logout</a></li>
		<li style="float:right"><p id="welcome" > Welcome <?php echo $_SESSION['name'] ?></p></li>
	</ul>
	<!-- header ends -->
	
	<!-- login form start-->
	<div id="modal-wrapper" class="modal">
      <form class="modal-content animate" action="#" method="post">  
		<div class="imgcontainer">
		  <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
		  <img src="images/login.png" alt="Avatar" class="avatar">
		</div>
		<div class="my-container">
		  <input type="text" placeholder="Enter Username" name="uname" required>
		  <input type="password" placeholder="Enter Password" name="psw" required>        
		  <input type="submit" name="login" value="Login" class="loginbtn">
		  <input type="checkbox" style="margin:26px 30px;"> Remember me      
		  <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
		  <p style="text-align: center; margin: 5px">new user <a href="register.html">Sign Up</a></p>
		</div>
	  </form>
	</div>
	<!-- login form end-->
	
	<!-- verifying login from database -->
	<?php
	if($_POST['login']) {
		$username = $_POST['uname'];
		$password = $_POST['psw'];
		
		if($username != "" && $password != ""){
			$query = "SELECT * FROM customer WHERE email_id = '$username' AND PASSWORD = '$password'";
			$data = mysqli_query($conn, $query);
			
			if($data){
				$row = mysqli_fetch_assoc($data);
				$name = $row['name'];
				$customer_id = $row['id'];
				showWelcome($row['name']);
			}else{
				echo "<br><span style='color: red'> Failed to insert data into database</span>";
				echo "<br><span style='color: red'> Error is: ".mysqli_error($conn)."</span>";
			}		
		}else 
			echo "<span style='color: red'>All fields are mandatory.</span>";
	}
	?>
</body>