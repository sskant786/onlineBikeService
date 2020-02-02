<!DOCTYPE html>
<html>
<head>
	
<style>
.container {
  margin-left: 15%;
  margin-right: 15%;
  background-color: #e6e6ff;
  align: center;
  text-align: center;
}
td {
	margin: 10px;
	padding: 15px;
	text-align: center;
	weight: 100%
}
.orderbtn {
    background-color: #000066;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
	font-size:20px;
	text-align: center;
}
.orderbtn :hover {
    opacity: 0.8;
}
</style>
</head>
<body>

<div class="container">
<h2>Order Form</h2>
<p>Please provide required details to get better service</p>
  <form action="#" method="post">
    <table>
	  <tr>
	    <td>
	      <label for="order_type">Order type</label>
        </td>
		<td>
          <select id="order_type" name="order_type" required>
			<option value=""> -- Select order types -- </option>
			<option value="Servicing">Servicing</option>
			<option value="Repairing">Repairing</option>
			<option value="Washing">Washing</option>
          </select>
		</td>
	   </tr>
	   <tr>
	    <td>
          <label for="discription">Discription</label>
        </td>
		<td>
		  <textarea id="discription" name="discription" placeholder="Write about your order..." style="height:100px" required></textarea>
        </td>
	   </tr>
	   <tr>
		 <td colspan="2">
		   <input type="submit" value="Submit Order" name="submit_order" class="orderbtn">
		 </td>
		</tr>
    </table>
  </form>
</div>
<?php
session_start();
include('db_connection/connection.php');

if(isset($_POST['submit_order']))
{
	$order_id="ORD".mt_rand();
	$customer_id=$_SESSION['c_id'];
	$order_type=$_POST['order_type'];
	$discription=$_POST['discription'];
	
	$query = "INSERT into orders(order_id, customer_id, type, status, discription) values('$order_id', '$customer_id', '$order_type','NEW', '$discription')";
	$isInserted = mysqli_query($conn, $query);
	
	if($isInserted){
		echo "<br><span style='color: green'> Thanks, Your order has been placed successfully.</span>";
	}else{
		echo "<br><span style='color: red'> Failed to place data order.</span>";
		echo "<br><span style='color: red'> Error is: ".mysqli_error($conn)."</span>";
	}
}
?>
</body>
</html>
