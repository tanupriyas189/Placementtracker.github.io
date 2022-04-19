<?php
  session_start();
  if(!isset($_SESSION['username'])){
    ?>
     <script>
       window.location="#";
     </script>
  <?php
  
  }
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">

    <title>Placement traking website</title>
     
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="CSS/homepage.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <section id="main">
    <nav>
        <a href="#" class="logo">
            <img src="images/mits logo.jpg"  alt="logo of mits">
        </a>
        <span class="menuspace"></span>
        <ul class="menu">
            <li><a href="#main">Home</a> </li>
            <li><a href="#about">About</a> </li>
            <li><a href="login.php">Recruiters</a> </li>
            <li><a href="login.php">Records</a> </li>
            <li><a href="#contact">Contact us</a> </li>

        </ul>
        <a href="login.php" class="login-btn"> Login</a>
    </nav>
</section>

<div class="text">
    <p class="text1"> Space that brings together</p>
    <h1 class="text2"> Everything You <br>need For <br> Placements</h1>
    <p class="text3">Every day brings with it a fresh set of <br> opportunities Grab Yours!</p>
    <a href="Registration/registration.php"  class="join-us-btn">Sign up</a>
    <button class="learn-more-btn" class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo" > 
      Learn more

    </button>
</div>

<div class="image">
     <img src="images/home-page-image.jpg" class="home-page-image" >    
</div>


<div class="offcanvas offcanvas-top" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Placement and Training</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p> 
       Campus Placement Process are organized by different companies for providing job placements of students for that company's contact T&P cell of MITS Gwalior. We, T&P Cell, also invites companies every year. It arranges all logistics & hospitality required at their best for the conduction of selection process at Institute with all required infrastructure.
       T&P Cell fulfil purpose for both sides; for students securing their future career and industry securing the best fresh talents available in the region.<br>
       Industrial Training and Internships are the integral part of the study to acknowledge them for real world problems. Students are placed at various industries for 6 to 8 weeks and under supervision and guidance of respective industry personnel.
       Industry visits of the students with faculty members are organized to the relevant industries at various locations. It serves the objective of exposure to large-scale practical applications of theoretical aspects for the students.
       Students prepare the projects reflecting the needs and problems of the industry. Institute faculty interacts with industry and students for successful implementation of such projects.<br>
       Apart from the above basic activities, Training & Placement Cell continuously connect with Alumni present in the all Industries for the benefits of students, Connects with Industries for Faculty Training and plays a vital role as front of Institute to build a brand in the market & Industry.</p>
  </p>
  </div>
</div>



<div id ="about" style=" display : flex; position : relative; width : 100%;">
     <h1 style="position : relative; font-size:50px; color : green; left : 43%">About Us</h1>
</div>

<div style=" display : flex;  position : relative;width : 80%; left : 10%;">
       <p style="font-size : 20px;"> 
          The Goal of Training & Placement Cell of MITS Gwalior is to be a liaison between Industry and students to provide employment opportunities available in the market and to provide intensive training to the students for their overall development.
          It works under guidance of Training & Placement Officer in consultation with Faculty In-Charge.
          Training & Placement Cell provides full placement support to its students in all areas of disciplines – Civil, Mechanical, Electrical, Electronics & Communication, Computer Science, Information Technology, Biotechnology & Chemical Engineering, Electronics & Telecommunication, Automobile Engineering and Computer Applications etc.
          Right from connecting with companies related to above mentioned disciplines in the industry to managing all logistics of arranging whole campus recruitment process with the required hospitality; T&P Cell officials and students coordinators provide their best possible assistance to the recruiters.
          Apart from that, T&P Cell focuses on conducting soft & professional skills training for Pre-Final & Final year students, Industrial Projects/Internships & Training, Guest Lectures, Motivation & Guiding Sessions, Alumni connect programmes and building brand value of the Institute in the industry & market.
      </p>
   </div>
</div>




<footer id="contact">
  <div class="cfl" id="contact-us">
    <a><span>Contact us</span> </a><br>
    <a><span>Email :</span> abcd@gmail.com</a> <br>
    <a><span>contact no:</span>433634756458</a><br>
    <a><span>Address:</span> mits,gwalior</a><br>
  </div>
  <div class="cfl" id="links">
    <a href="#">Home</a><br>
    <a href="login.php">Login</a><br>
    <a href="registration.php">Sign Up</a><br>
    <a href="login.php">Recruiters</a><br>
    <a href="login.php">records</a>
    <br>
    <p>© Copyright 2021. All rights reserved.</p>
  </div>
  
  <div class="cfl" id="follow-us">
    <img src="images/facebook.png" alt="facebook"><br>
    <img src="images/instagram.png" alt="instagram"><br>
    <img src="images/linkedin.png"  alt="linkedin">
  </div>
   <br>  
</footer>
    

</body>
</html>

