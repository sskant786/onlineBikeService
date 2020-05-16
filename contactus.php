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
.services {
  border-radius: 25px;
  box-shadow:10px 10px 10px #888888;
  margin-left: 10%;
  margin-right: 10%;
  background-color: #b3cce6;
  transform: rotate(8deg);
  transition: width 2s, height 2s, transform 2s;
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
.services:hover {
  transform: rotate(360deg);
}
 </style>
 </head>
<body>
	
	<!-- body starts from here -->
	<div class="center-content">
		<h1 style="color: #a64dff">Get the best service at your door step.</h1><br><br>
		<marquee direction="left" >
			<span style="margin:10px; font-size: 20px; color: #558000"> You can book an order/appointment to get your work done and keep tracking your order/appointment status. <span style="color: #ff99bb; font-weight: bold">We guarantee 100% customer satisfaction.</span></span>
		</marquee>
		<div class="center-list">
		<br>
		<div class="services">
		<h2>Services we provide</h2>
			<p>Complete Servicing</p>
			<p>Repair any kind of damage</p>
			<p>Repair any leackage</p>
			<p>Washing /Cleaning</p>
			<p>Modification of bike/scooty</p>
		</div>
		</div>
		<div class="contactus-detail">
			<h3> Address</h3>
			<p> Bike Service Center, Niramay Society</p>
		    <p> Lalite estate baner, pune - 411045</p>
		    <p> near Ganraj chowk</p>
			<h3> Contact Detail</h3>
			<p>Email: online.bike.service1@gmail.com</p>
			<p>Phone: +91 9511979705</p>
		</div>
		  
	</div>
	<!-- body ends here -->
	
	<?php include ('footer.html'); ?>
</body>
</html>
