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
//function to open new window
function openNewWindow() {
	var w = 500;
	var h = 500;
	var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var systemZoom = width / window.screen.availWidth;
	var left = (width - w) / 2 / systemZoom + dualScreenLeft;
	var top = (height - h) / 2 / systemZoom + dualScreenTop;

	var diamention = 'width=' + w / systemZoom +', height=' + h / systemZoom + ', top=' + top + ', left=' + left;
	window.open("order.php", "Book an order", diamention);
}
</script>
</head>
<body>	
	<!-- header starts -->
	<ul class="top-menu">
		<li><a class="active" href="index.php">Home</a></li>
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
	
</body>