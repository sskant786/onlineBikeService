<?php
session_start();
error_reporting(0);
if($_SESSION['user_id'] == "") {
include("menu_bar.php");
}else {
	echo "Logged in successful, username: ".$_SESSION['user_id'];
//include("menu_bar_logout.php");
}
?>
<html>
<head>
<style>
  .dashboard-icon {
	text-align: center;
	height: 160px;
	width: 200px;
	background-color: #0059b3;
	border-radius: 25px;	
  }
  .icon-container {
	padding-left: 100px;
	padding-right: 100px;
	padding-bottom: 100px;
  }
  .icon-container li:hover {
	opacity: 0.8;
  }
</style>
</head>
<body>
  <div class="center-content">
    <div class="icon-container">
	<ul>
		<li>
		  <a href="new_orders.php"><div class="dashboard-icon">
			<p> New Orders </p>
		  </div></a>
		</li>
		<li style="float:right">
		  <a href="update_orders.php"><div class="dashboard-icon">
			<p> Update Order Status </p>
		  </div></a>
		</li>
	</ul>
	<br><br>
	<ul>
		<li>
		  <a href="all_orders.php"><div class="dashboard-icon">
			<p> Show all orders </p>
		  </div></a>
		</li>
		<li style="float:right">
		  <a href="#"><div class="dashboard-icon">
			<p> Manage Customer </p>
			<p> Cooming soon </p>
		  </div></a>
		</li>
	</ul>
	</div>
  </div>
  <?php include("footer.html"); ?>
</body>
</html>