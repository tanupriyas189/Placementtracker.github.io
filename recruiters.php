<?php
 session_start();
 if(!isset($_SESSION['username'])){
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

    <title>recruiters</title>
    <link rel="stylesheet" href="CSS/recruiters.css">
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
            <img src="mits logo.jpg"  alt="logo of mits">
        </a>
        <span class="menuspace"></span>
        <ul class="menu">
            <li><a href="internal_home_page.php">Home</a> </li>
            <li><a href="#" style="color : rgb(0,150,0);">Recruiters</a> </li>
            <li><a href="records.php">Records</a> </li>
            <li><a href="#contact">Contact us</a> </li>

        </ul>
        <a href="logout.php" class="login-btn"> Log out</a>
    </nav>
</section>


<h1 style="text-align:center; font-size:50px;"> Leading Recruiters</h1>

<div style="width : 90%; float:left;position : relative; left : 5%; background-color:hsl(180, 3%, 81%)">

    <div class="logo-container">
        <a href="https://www.freshersworld.com/amazon-job-openings/44446" class="com_name">Amazone</a>
        <img  class="logos" src="recruiters/a.jpg">  
    </div>

    <div class="logo-container">
        <a  href="https://www.faceprep.in/samsung/samsung-recruitment-process/" class="com_name">Samsung</a>
        <img  class="logos" src="recruiters/Samsung.png">  
    </div>

    <div class="logo-container">
        <a class="com_name">Trident</a>
        <img  class="logos" src="recruiters/trident.png">  
    </div>
  
    <div class="logo-container">
        <a class="com_name">Quiker</a>
        <img  class="logos" src="recruiters/quiker.jpg">  
    </div>

    <div class="logo-container">
        <a class="com_name">TATA </a>
        <img  class="logos" src="recruiters/tata.png">  
    </div>

    <div class="logo-container">
        <a class="com_name">BYJUS</a>
        <img  class="logos" src="recruiters/byjus.png">  
    </div>

    <div class="logo-container">
        <a class="com_name">Tek System</a>
        <img  class="logos" src="recruiters/tek.png">  
    </div>

    <div class="logo-container">
        <a class="com_name">Newgen</a>
        <img  class="logos" src="recruiters/newgen.jpg">  
    </div>

    <div class="logo-container">
        <a class="com_name">Mahindra</a>
        <img  class="logos" src="recruiters/mahindra.jpg">  
    </div>

    <div class="logo-container">
        <a class="com_name">Hitachi </a>
        <img  class="logos" src="recruiters/hitachi.jpg">  
    </div>

    <div class="logo-container">
        <a class="com_name" style="font-size:25px;">Johnson Ltd.</a>
        <img  class="logos" src="recruiters/johnson.jpg">  
    </div>

    <div class="logo-container">
        <a class="com_name">Godrej</a>
        <img  class="logos" src="recruiters/godrej.png">  
    </div>

    <div class="logo-container">
        <a class="com_name">Persistent</a>
        <img  class="logos" src="recruiters/persistent.png">  
    </div>

    <div class="logo-container">
        <a class="com_name">Accenture</a>
        <img  class="logos" src="recruiters/accenture.jpg">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">BORL</a>
        <img  class="logos" src="recruiters/Borl.jpg">  
    </div>

    
    <div class="logo-container">
        <a class="com_name">Indian Navy</a>
        <img  class="logos" src="recruiters/in.jpg">  
    </div>

    
    <div class="logo-container">
        <a class="com_name" style="font-size:20px;">ITC Cementation</a>
        <img  class="logos" src="recruiters/itc.jpg">  
    </div>

    
    <div class="logo-container">
        <a class="com_name">Zycus</a>
        <img  class="logos" src="recruiters/zycus.jpg">  
    </div>

    
    <div class="logo-container">
        <a class="com_name" style="font-size:25px;">L&T Infotech</a>
        <img  class="logos" src="recruiters/infotech.jpg">  
    </div>

    
    <div class="logo-container">
        <a class="com_name">Capgemini</a>
        <img  class="logos" src="recruiters/cepgemini.jpg">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">Cadbury Ltd.</a>
        <img  class="logos" src="recruiters/cadbury.jpg">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">CSC,Noida</a>
        <img  class="logos" src="recruiters/csc.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">CMC Ltd.</a>
        <img  class="logos" src="recruiters/cmc.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">Britannia</a>
        <img  class="logos" src="recruiters/britannia.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">Lupin</a>
        <img  class="logos" src="recruiters/lupin.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name" style="font-size:22px;">Patni Computers</a>
        <img  class="logos" src="recruiters/patni.jpg">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">I-Gate</a>
        <img  class="logos" src="recruiters/igate.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name" style="font-size:22px;">Cummins India</a>
        <img  class="logos" src="recruiters/cummins.png">  
    </div>    
    
    <div class="logo-container">
        <a class="com_name" style="font-size: 17px;">CPC Diagmostic Pvt.</a>
        <img  class="logos" src="recruiters/cpc.png">  
    </div>

    <div class="logo-container">
        <a class="com_name" style="font-size:22px;">Eicher Tractors</a>
        <img  class="logos" src="recruiters/eicher.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">DCM shriram</a>
        <img  class="logos" src="recruiters/dcm.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name" style="font-size:22px;">Energy Infratech</a>
        <img  class="logos" src="recruiters/energy infra.png">  
    </div>

    
    <div class="logo-container">
        <a class="com_name">Ranbaxy</a>
        <img  class="logos" src="recruiters/Ranbaxy.jpg">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">ERA Group</a>
        <img  class="logos" src="recruiters/era_infra.gif">  
    </div>
    
    <div class="logo-container">
        <a class="com_name" style="font-size:20px;">Birla Corporation</a>
        <img  class="logos" src="recruiters/birla.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">Essel utilites</a>
        <img  class="logos" src="recruiters/essal.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name" style="font-size: 22px;">Surya Roshini</a>
        <img  class="logos" src="recruiters/surya.png">  
    </div>

    
    <div class="logo-container">
        <a class="com_name">EWDPL Ltd.</a>
        <img  class="logos" src="recruiters/ewdpl.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">Syntel</a>
        <img  class="logos" src="recruiters/syntel.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">TCS</a>
        <img  class="logos" src="recruiters/tcs.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">Amdocs</a>
        <img  class="logos" src="recruiters/amdocs.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">HCL tech.</a>
        <img  class="logos" src="recruiters/HCL.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name" style="font-size: 22px;">Tech Mahindra</a>
        <img  class="logos" src="recruiters/tech mahindra.jpg">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">Innoeye</a>
        <img  class="logos" src="recruiters/innoeye.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">Vatika Group</a>
        <img  class="logos" src="recruiters/vartika.jpg">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">Wipro Tech.</a>
        <img  class="logos" src="recruiters/wipro.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name " style="font-size: 23px;">Indian Airforce</a>
        <img  class="logos" src="recruiters/airforce.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">Infosys</a>
        <img  class="logos" src="recruiters/infosys.jpg">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">Zenser tech.</a>
        <img  class="logos" src="recruiters/zensar.png">  
    </div>
    
    <div class="logo-container">
        <a class="com_name">Ion exchange</a>
        <img  class="logos" src="recruiters/ion.png">  
    </div>

   
    <div class="logo-container">
        <a class="com_name"> IBM</a>
        <img  class="logos" src="recruiters/ibm.png">  
    </div>
   
    <div class="logo-container">
        <a class="com_name"> Jaypee Groups</a>
        <img  class="logos" src="recruiters/jaypee.png">  
    </div>
    <div class="logo-container">
        <a class="com_name">Quick Heal</a>
        <img  class="logos" src="recruiters/quick heal.png">  
    </div>
    <div class="logo-container">
        <a class="com_name">Jamna Auto</a>
        <img  class="logos" src="recruiters/jamna.png">  
    </div>
    <div class="logo-container">
        <a class="com_name">CSS corp.</a>
        <img  class="logos" src="recruiters/CSS_Corp.png">  
    </div>
    <div class="logo-container">
        <a class="com_name">Reliance </a>
        <img  class="logos" src="recruiters/reliance.png">  
    </div>
    <div class="logo-container">
        <a class="com_name">Emerald</a>
        <img  class="logos" src="recruiters/emarald.jpg">  
    </div>
    <div class="logo-container">
        <a class="com_name">Microweb</a>
        <img  class="logos" src="recruiters/microweb.png">  
    </div>
    <div class="logo-container">
        <a class="com_name" style="font-size: 22px;">Harihar Biotech.</a>
        <img  class="logos" src="recruiters/harihar.png">  
    </div>
    <div class="logo-container">
        <a class="com_name">UHP tech.</a>
        <img  class="logos" src="recruiters/uhp.png">  
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
    <a href="internal_home_page.php">Home</a><br
    <a href="#">Login</a><br>
    <a href="#">Sign Up</a><br>
    <a href="#">Recruiters</a><br>
    <a href="records.php">records</a>
    <br>
    <p>© Copyright 2021. All rights reserved.</p>
  </div>
  
  <div class="cfl" id="follow-us">
    <img src="facebook.png" alt="facebook"><br>
    <img src="instagram.png" alt="instagram"><br>
    <img src="linkedin.png"  alt="linkedin">
    
  </div>
  <br>
   


</body>
</html>

