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
  <!-- Design by foolishdeveloper.com -->
    <title>HOME</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="logoutbuttonhover.css">
    <style type="text/css">
      .form-style-1 {
        margin:10px auto;
        max-width: 400px;
        padding: 20px 12px 10px 20px;
        font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
      }
      .form-style-1 li {
        padding: 0;
        display: block;
        list-style: none;
        margin: 10px 0 0 0;
      }
      .form-style-1 label{
        margin:0 0 3px 0;
        padding:0px;
        display:block;
        font-weight: bold;
      }
      .form-style-1 input[type=text], 
      .form-style-1 input[type=date],
      .form-style-1 input[type=datetime],
      .form-style-1 input[type=number],
      .form-style-1 input[type=search],
      .form-style-1 input[type=time],
      .form-style-1 input[type=url],
      .form-style-1 input[type=email],
      textarea, 
      select{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        border:1px solid #BEBEBE;
        padding: 7px;
        margin:0px;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        outline: none;	
      }
      .form-style-1 input[type=text]:focus, 
      .form-style-1 input[type=date]:focus,
      .form-style-1 input[type=datetime]:focus,
      .form-style-1 input[type=number]:focus,
      .form-style-1 input[type=search]:focus,
      .form-style-1 input[type=time]:focus,
      .form-style-1 input[type=url]:focus,
      .form-style-1 input[type=email]:focus,
      .form-style-1 textarea:focus, 
      .form-style-1 select:focus{
        -moz-box-shadow: 0 0 8px #88D5E9;
        -webkit-box-shadow: 0 0 8px #88D5E9;
        box-shadow: 0 0 8px #88D5E9;
        border: 1px solid #88D5E9;
      }
      .form-style-1 .field-divided{
        width: 49%;
      }

      .form-style-1 .field-long{
        width: 100%;
      }
      .form-style-1 .field-select{
        width: 100%;
      }
      .form-style-1 .field-textarea{
        height: 100px;
      }
      .form-style-1 input[type=submit], .form-style-1 input[type=button]{
        background: #4B99AD;
        padding: 8px 15px 8px 15px;
        border: none;
        color: #fff;
      }
      .form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
        background: #4691A4;
        box-shadow:none;
        -moz-box-shadow:none;
        -webkit-box-shadow:none;
      }
      .form-style-1 .required{
        color:red;
      }
    </style>
</head>

<!--
Interface coded by Wanderson Jackson, UX Designer and UI Developer
https://www.uplabs.com/jackson
------------------------------------------------------------------
UI Concept by Viyaj Verna, Product designer
https://www.uplabs.com/posts/profile-card-ddd03647-6e7e-4bda-8571-0d1f4eb52f21
twitter.com/realvjy
-->

<script>
    var $btn = document.getElementsByClassName('button');
    var mouseObj = {
    mouseCoords: null,
    mousetThreshold: 0.12,
    manageMouseLeave: function(event) {
      event.currentTarget.style.boxShadow = "0 0 0 rgba(0,0,0,0.2)";
      // update btn gradient
      event.currentTarget.style.background = "#233142";
    },
    manageMouseMove: function(event) {
      var dot, eventDoc, doc, body, pageX, pageY;
    
    event = event || window.event; // IE-ism
    target = event.currentTarget;
    // (old IE)
    if (event.pageX == null && event.clientX != null) {
      eventDoc = (event.target && event.target.ownerDocument) || document;
      doc = eventDoc.documentElement;
      body = eventDoc.body;

      event.pageX = event.clientX +
        (doc && doc.scrollLeft || body && body.scrollLeft || 0) -
        (doc && doc.clientLeft || body && body.clientLeft || 0);
      event.pageY = event.clientY +
        (doc && doc.scrollTop || body && body.scrollTop || 0) -
        (doc && doc.clientTop || body && body.clientTop || 0);
    }

    // Use event.pageX / event.pageY here

    //normalize
    //bodyRect = document.body.getBoundingClientRect(),
    var elemRect = target.getBoundingClientRect(),//$btn.getBoundingClientRect(),
        mean = Math.round(elemRect.width / 2);
    //offset   = elemRect.top - bodyRect.top;

    //mouseObj.mouseCoords = {mouse_x: event.pageX - elemRect.left , mouse_y:event.pageY - elemRect.top}
    mouseObj.mouseCoords = {
      mouse_true_x: event.pageX - elemRect.left,
      mouse_x: (event.pageX - elemRect.left - mean) * mouseObj.mousetThreshold,
      mouse_y: event.pageY - elemRect.top
    }
    mouseObj.manageButtonShadow(-1, target);
    },
    manageButtonShadow: function(direction, target) {
    if (mouseObj.mouseCoords) {
      mouseObj.mouseCoords.mouse_x = Math.floor(mouseObj.mouseCoords.mouse_x);
      target.style.boxShadow = direction * mouseObj.mouseCoords.mouse_x + "px 10px 0 rgba(0,0,0,0.2)";
      
      // update btn gradient
      target.style.background = "radial-gradient(at "+mouseObj.mouseCoords.mouse_true_x+"px, #425265 0%, #233142 80%)";
      
      //2a3d52
      
    //45576e
        }
      }
    }

    // init listeners
    for(i=0; i<$btn.length; i++) {
      $btn[i].addEventListener('mousemove', mouseObj.manageMouseMove, false);
      $btn[i].addEventListener('mouseleave', mouseObj.manageMouseLeave, false);
    }

</script>








<div class="container">
  <div class="grid-7 element-animation">
    <!--card-1-->
    <div class="card color-card">
    
      <ul><br><br>
        <li><a href="logout.php" ><font color="WHITE">Logout</font></a></li>
        
      </ul>
      
      <img src="student.png" alt="profile-pic" class="profile"><br><br>
      
      
     



      <h1 class="title">

      <?php
                require'connection.php';
 
 
                $query1 = mysqli_query($con, "SELECT * FROM `users` WHERE `user_id`='$_SESSION[user_id]'") or die(mysqli_error());
                $fetch = mysqli_fetch_array($query1);
 
                echo "<h2 class='text-success'>".$fetch['fname']."</h2>";
            ?>
      
     
      <div class="desc top">
        <p>StudentS Activity Point Management System</p>
      </div>
  

      <hr>
      <div class="container">
        <div class="content">
          <div class="grid-2">
            
            <h2 class="title"><h1 class="title"><?php
                require'connection.php';
 
 
                $query1 = mysqli_query($con, "SELECT * FROM `users` WHERE `user_id`='$_SESSION[user_id]'") or die(mysqli_error());
                $fetch = mysqli_fetch_array($query1);
 
                echo "<h2 class='text-success'>".$fetch['activitypoints']."</h2>";
            ?></b></h1></h2>
            <p class="followers">Current AP</p>
          </div>
          <div class="grid-2">
            <button class="color-d circule" onClick="window.location.href='profile.php';"><i class="fab fa-github-alt fa-2x"></i></button><br><br>
            <p class="followers">Profile</p>
            
           
 
            
          </div>
        </div>
      </div>
    </div>
  </div>

 

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">  
<BR><BR>




<h2 style="color:blue">File Upload</h2>

<form>
    <ul class="form-style-1">
        
        
        <li>
            <label>Event Type</label>
            <select name="field4" class="field-select">
            <option value="Advertise">Advertise</option>
            <option value="Partnership">Partnership</option>
            <option value="General Question">General</option>
            </select>
        </li>
        
</form> 
<br>
<form action="upload.php"
           method="post"
           enctype="multipart/form-data"  >
           

           <input type="file" 
                  name="my_image"> 

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form> <hr>
    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>




   

</html>