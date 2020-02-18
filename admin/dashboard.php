<?php
session_start();
error_reporting(0);
if($_SESSION['user_id'] == "" || $_SESSION['user_id'] == null) {
	header('location:index.php');
}else {
	include("menu_bar.php");
}
?>
<html>
<head>
<style>
  .dashboard-icon {
	text-align: center;
	height: 200px;
	width: 200px;
	background-color: #0059b3;
	border-radius: 25px;
	box-shadow:10px 10px 10px #888888;
	border: 1px solid #336699;
  }
  .icon-container {
	padding-left: 100px;
	padding-right: 100px;
	padding-bottom: 100px;
  }
  .icon-container li:hover {
	opacity: 0.6;
  }
  
</style>
</head>
<body>
  <div class="center-content">
    <div class="icon-container">
	<ul>
		<li>
		  <a href="new_orders.php"><div class="dashboard-icon">
			<img src="images/new-orders.png" height="150px" width="150px">
			<p> New Orders </p>
		  </div></a>
		</li>
		<li style="float:right">
		  <a href="update_orders.php"><div class="dashboard-icon">
			<img src="images/update-orders.png" height="150px" width="150px">
			<p>Update Order Status</p>
		  </div></a>
		</li>
	</ul>
	<br><br>
	<ul>
		<li>
		  <a href="all_orders.php"><div class="dashboard-icon">
			<img src="images/orders.png" height="150px" width="150px">
			<p>Show all orders<p>
		  </div></a>
		</li>
		<li style="float:right">
		  <a href="#"><div class="dashboard-icon">
			<img src="images/manage-users.png" height="150px" width="150px">
			<p>Manage Customers</p>
		  </div></a>
		</li>
	</ul>
	</div>
  </div>
  <?php include("footer.html"); ?>
</body>
</html>