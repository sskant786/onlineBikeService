<?php
session_start();
error_reporting(0);
//if($_SESSION['name'] == "") {
//header('location:index.html');
//}else {
include("menu_bar.php");
//}
include('../db_connection/connection.php');
//$customer_id = $_SESSION['c_id'];
$query = "SELECT * FROM orders where status='NEW'";
$data = mysqli_query($conn, $query);
?>
<html>
<head>
<title>orders</title>
<style>
.center-content td, th {
	margin: 15px;
	padding: 10px;
}
table {
  border-collapse: collapse;
}
table, td, th {
  border: 2px solid #0059b3;
}
th {
  background: #336699;
}
</style>
</head>
  <body>
    <div class="center-content">
	  <h2 style="color:green; text-align: center">New Orders </h2>
	  <table align="center">
	  	<tr>
	  	  <th>Order Id</th>
	  	  <th>Customer Id</th>
	  	  <th>Type</th>
	  	  <th>Status</th>
	  	  <th>Discription</th>
	  	</tr>
	  	<?php
	  	while($row = mysqli_fetch_assoc($data)){
	  	echo "<tr>
	  		<td>".$row['order_id']."</td>
	  		<td>".$row['customer_id']."</td>
	  		<td>".$row['type']."</td>
	  		<td>".$row['status']."</td>
	  		<td>".$row['discription']."</td>
	  	</tr>";
	  	}
	  	?>
	  </table>
	 <br><br><br>
    </div>	
	<?php include('footer.html'); ?>
  </body>
<html>
