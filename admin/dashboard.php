<?php
session_start();
error_reporting(0);
if($_SESSION['user_id'] == "") {
include("menu_bar.php");
}else {
	echo "Logged in successful, username: ".$_SESSION['user_id'];
//include("menu_bar_logout.php");
}
?>
<html>
<body>
  <a href="logout.php">Logout</a>
</body>
</html>