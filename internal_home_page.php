
<?php
session_start();
if(!isset($_SESSION['name'])){
 ?>
  <script>
    location.replace("login.php");
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

    <link rel="stylesheet" href="CSS/internal_home_page.css">
    <link rel="stylesheet" href="style.css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 

</head>

<body>
  <section id="main">
    <nav>
        <a href="#" class="logo">
            <img src="images/mits logo.jpg"  alt="logo of mits">
        </a>
        <span class="menuspace"></span>
        <ul class="menu">
            <li><a href="#main" style="color :rgb(0 , 150 , 0);">Home</a> </li>
            <li><a href="#about">About</a> </li>
            <li><a href="recruiters.php">Recruiters</a> </li>
            <li><a href="records.php">Records</a> </li>
            <li><a href="commentsection/commentindex.php">Community</a> </li>

        </ul>
        <a href="logout.php" class="login-btn"> Log out</a>

    </nav>
</section>

<div style="width: 100%; padding-left: 20px;" > 
   <h4>
   <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo1">
        <img  style="width : 50px; height:50px; border-radius:50px;" src="images/profile.png" alt="profile">
     </button>
     <?php echo $_SESSION['name'];?>
   </h4>
</div>

<!-- OFFCANVAS -->
<div class="offcanvas offcanvas-start" id="demo1">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">
      <img src="images/profile.png" style="width : 200px; height:200px; "><br>
      <?php echo $_SESSION['name'];?>
    </h1>
    <!--<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>-->
  </div>
  <div class="offcanvas-body">
    <p class="profile-data"> <?php echo $_SESSION['email'];?> </p>
    <p class="profile-data"> <?php echo $_SESSION['phone'];?></p>
    <p class="profile-data"><?php echo $_SESSION['branch'];?></p>
    <p class="profile-data"><?php echo $_SESSION['year'];?></p>
    <p><a href="profile.php"  class="profile-link">Favorite</a></p>
    <p><a href="profile.php"  class="profile-link">preferrences</a></p>
    <button class="open-button btn btn-success" >
      <a href="EditProfile.php" style="color:black; text-decoration:none;">
         Edit Profile
      </a>
    </button>
    <hr>
    <p><a href="logout.php"  class=" container btn btn-danger">Log out</a></p>
  </div>
</div>


<!-- slides image  -->

<!-- Carousel -->
<div id="demo2" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo2" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/palcement.jpg" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/palcement.jpg" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/palcement.jpg" alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>




<!--  -->



<!--alumini-->

<div class="slideshow-container">
    <h1>Prominent Alumni</h1>

    <div class="mySlides fade">

      <img src="professor/pro.jpg" style="width: 100%; height: 450px; margin: 26.4365px 0px;">

      <div class="text">Caption Text</div>
    </div>
    
    <div class="mySlides fade">
    <img src="professor/pro12.jpg" style="width: 100%; height: 450px; margin: 26.4365px 0px;">

      <div class="text">Caption Two</div>
    </div>
    
    <div class="mySlides fade">
    <img src="professor/pro13.jpg" style="width: 100%; height: 450px; margin: 26.4365px 0px;">

      <div class="text">Caption Three</div>
    </div>
    <div class="mySlides fade">
    <img src="professor/pro14.jpg" style="width: 100%; height: 450px; margin: 26.4365px 0px;">

      <div class="text">Caption Three</div>
    </div>
    <div class="mySlides fade">
    <img src="professor/pro15.jpg" style="width: 100%; height: 450px; margin: 26.4365px 0px;">

      <div class="text">Caption Three</div>
    </div>
    

    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 

    </div>
    


<!---->




<div  id ="about" style=" display : flex; position : relative; width : 100%; "><h1 style="position : relative; font-size:40px; color : green; left : 43%">About Us</h1>
</div>
   <div  style=" display : flex;  position : relative;width : 80%; left : 10%;"><p style="font-size : 20px;"> The Goal of Training & Placement Cell of MITS Gwalior is to be a liaison between Industry and students to provide employment opportunities available in the market and to provide intensive training to the students for their overall development.
It works under guidance of Training & Placement Officer in consultation with Faculty In-Charge.
Training & Placement Cell provides full placement support to its students in all areas of disciplines – Civil, Mechanical, Electrical, Electronics & Communication, Computer Science, Information Technology, Biotechnology & Chemical Engineering, Electronics & Telecommunication, Automobile Engineering and Computer Applications etc.
Right from connecting with companies related to above mentioned disciplines in the industry to managing all logistics of arranging whole campus recruitment process with the required hospitality; T&P Cell officials and students coordinators provide their best possible assistance to the recruiters.
Apart from that, T&P Cell focuses on conducting soft & professional skills training for Pre-Final & Final year students, Industrial Projects/Internships & Training, Guest Lectures, Motivation & Guiding Sessions, Alumni connect programmes and building brand value of the Institute in the industry & market.
</p></div>


<footer id="contact">
  <div class="cfl" id="contact-us">
    <a><span>Contact us</span> </a><br>
    <a><span>Email :</span> abcd@gmail.com</a> <br>
    <a><span>contact no:</span>433634756458</a><br>
    <a><span>Address:</span> mits,gwalior</a><br>
  </div>
  <div class="cfl" id="links">
    <a href="#">Home</a><br>
    <a href="#">Login</a><br>
    <a href="#">Sign Up</a><br>
    <a href="recruiters.php">Recruiters</a><br>
    <a href="records.php">records</a>
    <p>© Copyright 2021. All rights reserved.</p>
  </div>
  
  <div class="cfl" id="follow-us">
    <img src="facebook.png" alt="facebook"><br>
    <img src="instagram.png" alt="instagram"><br>
    <img src="linkedin.png"  alt="linkedin">
    
  </div>
  <br>
   
</footer>
 
    
</body>
</html>


<script>
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 3000); 
    }



    </script>