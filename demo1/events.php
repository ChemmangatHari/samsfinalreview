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
   <style>
      table {
        width: 100%;
        border-collapse: collapse;
      }
      table,
      th,
      td {
        border: 1px solid black;
      }
      thead {
        background-color: #1c87c9;
        color: #ffffff;
      }
      th {
        text-align: center;
        height: 50px;
      }
      tbody tr:nth-child(odd) {
        background: #ffffff;
      }
      tbody tr:nth-child(even) {
        background: #f4f4f4;
      }
    </style>
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
        <span class="dashboard">Dashboard</span>
      </div>
      
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">TUTOR</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Admin Name</div>
            <div class="number"> <?php
                require'connection.php';
 
 
                $query1 = mysqli_query($con, "SELECT * FROM `admins` WHERE `user_id`='$_SESSION[user_id]'") or die(mysqli_error());
                $fetch = mysqli_fetch_array($query1);
 
                echo "<h2 class='text-success'>".$fetch['user_name']."</h2>";
            ?></div>
            
          </div>
          
        
           
          </div>
          
        </div>
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


<div class ="table">
     <table border="2" bordercolor="blue" bgcolor="transparent" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Activity Head</th>
                <th>Achievement Level</th>
                <th>Achievement Details</th>
                <th>Event Details</th>
                <th>Venue</th>
                <th>Date</th>
                <th>Certificate Links</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"login_sample_db");
               
                
                $query = mysqli_query($connection,"SELECT * FROM event_details order by s_name ASC");
                
                if (mysqli_num_rows($query)==0)
                {
                    echo "<tr>
                            <td colspan='7'> No rows returned </td> 
                        </tr>";
                }
                else
                {
                    while($row=mysqli_fetch_row($query))
                    {
                        echo "<tr>
                                <td> $row[0] </td> 
                                <td> $row[1] </td>
                                <td> $row[2] </td> 
                                <td> $row[3] </td> 
                                <td> $row[4] </td> 
                                <td> $row[5] </td> 
                                <td> $row[6] </td> 
                                <td> $row[7] </td> 
                                <td> <a href=$row[8]>Certificate Link</a> </td> 
                                
                            </tr> ";
                    }
                }
            ?>
        </tbody>
    </table>

     </div>
 

</body>
</html>

</body>
</html>

