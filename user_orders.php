<?php
session_start();
if($_SESSION['name'] == "") {
header('location:index.php');
}else {
include("menu_bar_logout.php");
}
include('db_connection/connection.php');
$query = "SELECT * FROM orders";
$data = mysql_query($conn, $query);
echo "conn11 -";
?>
<html>
<head>
<title>orders</title>
</head>
  <body>
    	<div class="center-content">
	<table align="center">
	<tr>
	  <th colspan="4"><h2 style="color:green">Your Order</h2></th>
	</tr>
	<tr>
	  <th>Order Id</th>
	  <th>Type</th>
	  <th>Status</th>
	  <th>Discription</th>
	 </tr>
	 <?php
	  echo "$query - $data";
	  while($row = mysqli_fetch_assoc($data)){
		  echo "in while loop";
	   echo "<tr>
		 <td>".$row['order_id']."</td>
		 <td>".$row['type']."</td>
		 <td>".$row['status']."</td>
		 <td>".$row['discription']."</td>
	   </tr>";
	  }
	 ?>
	 </table>
    </div>	
  </body>
<html>
