<?php
include("../db_connection/connection.php");
session_start();
error_reporting(0);
?>
<head>
   <link rel="stylesheet" type="text/css" href="../css/bike_home.css">
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
<body "document.getElementById('modal-wrapper').style.display='block'">	
	<!-- header starts -->
	<ul class="top-menu">
		<li><a class="active" href="index.php">Home</a></li>
		<li><a href="new_orders.php">New Orders</a></li>
		<li><a href="update_status.php">Update Order Status</a></li>
		<li><a href="all_orders.php">All Orders</a></li>
		<li style="float:right"><a href="logout.php" id="logout_lnk">Logout</a></li>
		<li style="float:right"><p id="welcome" > Welcome <?php echo $_SESSION['user_id'] ?></p></li>
	</ul>
	<!-- header ends -->
	
	
</body>