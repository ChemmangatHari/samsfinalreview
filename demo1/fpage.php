<?php 
session_start();


	include("connection.php");
	

	

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>HOME</title>
    <link rel="stylesheet" href="fpage.css">

</head>
<body>
    <p>
<button class="glow-on-hover" type="button" onclick="window.location.href='login.php';">Student Login</button>

<br><br><br><br>
<button class="glow-on-hover" type="button" onclick="window.location.href='admin.php';">Tutor Login</button>

</p>
</body>
</html>