<?php
session_start();
if($_SESSION['name'] == "")
{
	header("location:index.php");
}
include('menu_bar_logout.php');
?>
<html>
<head>
<title> your profile</title>
<style>

.center-content td {
	margin: 15px;
	padding: 10px;
	
}
</style>

</head>
<body>
	<div class="center-content">
	<table align="center">
	<tr>
	  <th colspan="2"><h2 style="color:green">Your Profile</h2></th>
	</tr>
	<tr>
	  <td>Customer Id :</td><td><?php echo $_SESSION['c_id'] ?></td>
	</tr>
	<tr>
	  <td>Name :</td><td><?php echo $_SESSION['name'] ?></td>
	</tr>
	<tr>
	  <td>Email Id :</td><td><?php echo $_SESSION['email_id'] ?></td>
	</tr>
	<tr>
	  <td>Phone No :</td><td><?php echo $_SESSION['phone_no'] ?></td>
	 
	</tr>
	<tr>
	  <td>Address :</td><td><?php echo $_SESSION['address'] ?></td>
	</tr>
	</table>
	<br><br><br>
	</div>
<?php include("footer.html"); ?>
</body>
</html>