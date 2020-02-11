<?php
session_start();
error_reporting(0);
if($_SESSION['name'] == "") {
  include("menu_bar.php");
}else {
  include("menu_bar_logout.php");
}
 ?>
 <html>
 <head>
 <style>
.contactus-detail {
  text-align: left;
  display: block;
  padding: 20px;	
}
.contactus-detail p {
  margin-left: 30px;
  font-weight: bold;
  color: green;
}
.center-list {
	text-align: center;
}
.center-list p {
	margin-left: 30px;
	font-weight: bold;
	font-size: 18px;
	color: #999900;
}
 </style>
 </head>
<body>
	
	<!-- body starts from here -->
	<div class="center-content">
		<h1>Get the best service at your door step.</h1><br><br>
		<span margin=10px> You can book an order/appointment to get your work done and keep tracking your order/appointment status. We guarantee 100% customer satisfaction.</span>
		<div class="center-list">
		<h2>Services we provide</h2>
			<p>Complete Servicing</p>
			<p>Repair any kind of damage</p>
			<p>Repair any leackage</p>
			<p>Washing /Cleaning</p>
			<p>Modification of bike/scooty</p>
		</div>
		<div class="contactus-detail">
			<h3> Address</h3>
			<p>Shop no: 101, Niramay Society</p>
			<p>Lalit estat baner-411045</p>
			<p>near Ganraj chock.</p>
			<h3> Contact Detail</h3>
			<p>Email: dholi.chetan123@gmail.com</p>
			<p>phone: +91 8210863905 </p>
		</div>
		  
	</div>
	<!-- body ends here -->
	
	<?php include ('footer.html'); ?>
</body>
</html>
