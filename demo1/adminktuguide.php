<?php 
session_start();


	include("connection.php");
	include("functions.php");

	$user_data = check_loginadmin($con);

  $user_id = $_SESSION['user_id'];
  
  







?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">SAMS</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="adminpage.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Requests</span>
          </a>
        </li>
        <li>
          <a href="adminktuguide.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">KTU Guidelines</span>
          </a>
        </li>
        <li>
          <a href="studentslist.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Students list</span>
          </a>
          <a href="signup.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Register New User</span>
          </a>
          <a href="events.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">View Events</span>
          </a>
          <a href="logout.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Logout</span>
          </a>
        </li>
        
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">KTU Guidelines</span>
      </div>
      
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">TUTOR</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        
        <div class="box1">
          <div class="right-side">
          
            <div class="number"></div>
            
          </div>
         
        </div>
        
         
           
           
           

     </div>
     
      


  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

 
<embed src="ACTIVITYPOINTS.pdf" width="1270px" height="580px" /> 
</body>
</html>

</body>
</html>

