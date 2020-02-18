<?php
include("db_connection/connection.php");
error_reporting(0);
?>
<head>
   <title>Chetan's bike center</title>
   <link rel="stylesheet" type="text/css" href="css/bike_home.css">
</head>
<body>
<script>
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
//function to open new window
function openNewWindow() {
	alert("Please login to book an appointment.");
}
</script>
<style>
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown-content a:hover {
  background-color: #ddd;
}
</style>
</head>
<body>
	<!-- header starts -->
	<ul class="top-menu">
		<li><a class="active" href="index.php">Home</a></li>
		<li><a href="#" onclick="openNewWindow()">Book Appointment</a></li>
		<li><a href="contactus.php">Contact Us</a></li>
		<div class="dropdown">
		<li style="float:right"><a href="#">Login</a></li>
		</div>
		<div class="dropdown-content">
			<a href="#">AS User</a>
			<a href="#">As Admin</a>
		</div>
		<li style="float:right"><a href="#login" id="login_lnk" onclick="document.getElementById('modal-wrapper').style.display='block'">Login</a></li>
		<li style="float:right"><a href="register.php">Sign Up</a></li>
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
	if(isset($_POST['login'])) {
		$username = $_POST['uname'];
		$password = $_POST['psw'];
		
		if($username != "" && $password != ""){
			$query = "SELECT * FROM customer WHERE email_id = '$username' AND PASSWORD = '$password'";
			$data = mysqli_query($conn, $query);
			
			if($data){
				$row = mysqli_fetch_assoc($data);
				$name = $row['name'];
				$customer_id = $row['id'];
				session_start();
				$_SESSION['name'] = $name; 
				$_SESSION['c_id'] = $row['id']; 
				$_SESSION['email_id'] = $row['email_id']; 
				$_SESSION['phone_no'] = $row['phone_no']; 
				$_SESSION['address'] = $row['address']; 
				
				header('location:index.php');
			}else{
				echo "<br><span style='color: red'> Failed to insert data into database</span>";
				echo "<br><span style='color: red'> Error is: ".mysqli_error($conn)."</span>";
			}		
		}else 
			echo "<span style='color: red'>All fields are mandatory.</span>";
	}
	function showWelcome($name) { ?>
		<script>
		  document.getElementById('welcome').innerHTML = "Welcome "+<?php echo $name ?>;
		  document.getElementById('login_lnk').innerHTML = "Logout";
		</script>
		<?php
		echo "<br><span style='color: green'> Customer name is $name</span>";
	}
	?>
</body>