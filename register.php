<?php
include("db_connection/connection.php")
?>
<html>
<head>
<style>
/* Add padding to containers */
.container {
	padding: 30px;
	margin-left:20%;
	margin-right:20%;
	background-color: white;
	border: 2px solid #ccccff;
}
/* Full-width input fields */
input[type=text], input[type=password], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/* Set a style for the submit button */
.registerbtn {
  background-color: #000066;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
/* Set a grey background color and center the text of the "sign in" section */
.signin {
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<form action="#" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter your name" name="name" required>
	
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
	 
	<label for="Phone no"><b>Phone no</b></label>
    <input type="number" placeholder="Enter Number" name="number" required>
	
	<label for="Address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="Address" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <input type="submit" name="submit" value="Register" class="registerbtn">
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
<?php 
if($_POST['submit'])
{
	$id = "CUST".mt_rand();
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['psw'];
	$phone_no = $_POST['number'];
	$address = $_POST['Address'];
	
	if($id != "" && $name != "" && $email != "" && $password != "" && $phone_no !="" && $address !=""){
		$query = "INSERT into customer(id, name, email_id, password, phone_no, address) values('$id', '$name', '$email','$password', '$phone_no', '$address')";
		$isInserted = mysqli_query($conn, $query);
		
		if($isInserted){
			echo "<br><span style='color: green'> Registeration completed successfully.</span>";
		}else{
			echo "<br><span style='color: red'> Failed to insert data into database</span>";
			echo "<br><span style='color: red'> Error is: ".mysqli_error($conn)."</span>";
		}
		
	}else 
		echo "<span style='color: red'>All fields are mandatory.</span>";
}
?>
  </div>
</form>
</body>
</html>
