<?php
include('../db_connection/connection.php');
$oid = $_GET['orderId'];
$status = $_GET['order_type'];
$query = "update orders set status = '$status' where order_id = '$oid'";
echo $query;

$isUpdated = mysqli_query($conn, $query);
if($isUpdated){
	echo "order updated successfully";
	header('location:update_orders.php');
}
else
	 echo "<br><span style='color: red'> Error is: ".mysqli_error($conn)."</span>";
?>