<?php
include('../db_connection/connection.php');
$oid = $_GET['order_id'];
$status = $_GET['new_status'];
$query = "update orders set status = 'Completed' where order_id = 'CUST281041578'";

$isUpdated = mysqli_query($conn, $query);
if($isUpdated)
	echo "order updated successfully";
 else
	 echo "<br><span style='color: red'> Error is: ".mysqli_error($conn)."</span>";
?>