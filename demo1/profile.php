<?php 
session_start();


	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	$user_id = $_SESSION['user_id'];
  
	$query  = "SELECT * FROM users WHERE user_id= $user_id;";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="profile.css">
		<style>
			HTML CSSResult Skip Results Iframe
EDIT ON
* {
  padding: 0;
  margin: 0;
}

body {
  background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
    url(https://images.pexels.com/photos/2166927/pexels-photo-2166927.jpeg?cs=srgb&dl=animal-aquarium-aquatic-2166927.jpg&fm=jpg)
      no-repeat center center/cover;
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

a {
  font-size: 1.5rem;
  padding: 1rem 3rem;
  color: #f4f4f4;
  text-transform: uppercase;
}

.btn {
  text-decoration: none;
  border: 1px solid rgb(146, 148, 248);
  position: relative;
  overflow: hidden;
}

.btn:hover {
  box-shadow: 1px 1px 25px 10px rgba(146, 148, 248, 0.4);
}

.btn:before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    120deg,
    transparent,
    rgba(146, 148, 248, 0.4),
    transparent
  );
  transition: all 650ms;
}

.btn:hover:before {
  left: 100%;
}


Resources
		</style>
    </head>

<figure class="snip0045 green">
	<figcaption>
	<h2 class="title"><h1 class="title"><?php
                require'connection.php';
 
 
                $query1 = mysqli_query($con, "SELECT * FROM `users` WHERE `user_id`='$_SESSION[user_id]'") or die(mysqli_error());
                $fetch = mysqli_fetch_array($query1);
 
                echo "<h2 class='text-success'>".$fetch['user_name']."</h2>";
            ?></b></h1></h2>
		
		
		<!--
		<div class="icons">
			<a href="#"><i class="ion-ios-home"></i></a>
			<a href="#"><i class="ion-ios-email"></i></a>
			<a href="#"><i class="ion-ios-telephone"></i></a>
		</div>	
-->
	</figcaption>
	<img src="studblue.png" alt="sample6"/>	
	<div class="position">Student</div>
</figure>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <title>KTU</title>
  </head>
  <body>
    <div class="container">
      <a href="https://app.ktu.edu.in/login.htm" class="btn">KTU Portal</a>
    </div>

</html>