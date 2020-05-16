<?php
session_start();
error_reporting(0);
if($_SESSION['name'] == "") {
include("menu_bar.php");
}else {
include("menu_bar_logout.php");
}
include("db_connection/connection.php");
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
#welcome {
	display: block;
	color: white;
	text-align: center;
	padding-top: 16px;
	padding-right: 20px;
}
</style>
<script>
// js code for image carousel
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
  $(".item4").click(function(){
    $("#myCarousel").carousel(3);
  });
    
  // Enable Carousel Controls
  $(".left").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".right").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>
</head>
<body>
	
	<!-- body starts from here -->
	<div class="center-content">
		<h1>Welcome to Chetan's bike center</h1><br><br>
		<?php 
		if(!$_SESSION['err_msg'] == "") {
		  echo "<h4 style='color:red; text-align: center;'>".$_SESSION['err_msg']."</h4>";
		}
		?>
		<span>Get the best service at your door step</span>
		
		<!-- Image animation -->
		<!--<div class="container">-->
		<div id="myCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li class="item1 active"></li>
			  <li class="item2"></li>
			  <li class="item3"></li>
			  <li class="item4"></li>
			</ol>
	
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
			  	<img src="bike_images/bike3.jpg" alt="Chania" width="400" height="345">
			  	<div class="carousel-caption">
			  	  
			    </div>
			  </div>
		
			  <div class="item">
			  	<img src="bike_images/bike1.jpg" alt="Chania" width="400" height="345">
			  	<div class="carousel-caption">
			  	  
			  	</div>
			  </div>
			  
			  <div class="item">
			  	<img src="bike_images/bike2.jpg" alt="Flower" width="400" height="345">
			  	<div class="carousel-caption">
			  	  
			  	</div>
			  </div>
			  
			  <div class="item">
			  	<img src="bike_images/bike3.jpg" alt="Flower" width="400" height="345">
			  	<div class="carousel-caption">
			  	  
			  	</div>
			  </div>
			  
			  <div class="item">
			  	<img src="bike_images/bike4.jpg" alt="Chania" width="400" height="345">
			  	<div class="carousel-caption">
			  	  
			  	</div>
			  </div>
			</div>
		
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
		<!--</div>-->
	</div>
	
	<!-- including footer -->
	<?php include("footer.html"); ?>
</body>
</html>