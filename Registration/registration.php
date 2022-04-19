<?php
include 'registrationPHP.php';
?>

<!DOCTYPE html>
<!-- saved from url=(0039)http://127.0.0.1:5500/registration.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width , initial-scale=1.0">

     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
    
     <link href="registration.css" rel="stylesheet">

    <title>Placement traking website</title>

  </head>

<body >
  
  <div class="container border bg-light">
    <h3 class="text-center">Register New Account</h3>
    <hr>
    <div class="row  p-2">
       <div class="col-3"> 
           <img width="200" height="200" src="images/profile.png">
           <button  class="btn btn-primary m-4"> Upload image </button>  

       </div>
       <div class="col-9  p-2"> 
           <br>
               <form action=""  method="post">
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-6"> 
                              <label for="uname"><h6>Email</h6></label><br>
                              <input type="text" id="uname" placeholder="Email" name="email" required><br>

                              <label for="name"><h6>Name</h6></label><br>
                              <input type="text" id="name" placeholder="Name" name="name" required><br>

                              <label for="password"><h6>Password</h6></label><br>
                              <input type="password" id="password" placeholder="Password" name="password" required><br>

                              <label for="gender"><h6>Gender</h6></label><br>
                              <select id="gender" name="gender">
                                  <option value="">Select Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Other">Other</option>
                              </select>
                                               
                           </div>
                           <div class="col-6"> 
                              <label for="enroll"><h6>Enrollment Number</h6></label><br>
                              <input type="text" id="enroll" placeholder="Enrollment Number" name="enrollment" required><br>

                              <label for="branch"><h6>Branch</h6></label><br>
                              <input type="text" id="branch" placeholder="Branch" name="branch" required><br>
                   
                              <label for="year"><h6>Year</h6></label><br>
                              <select id="year" name="year">
                                  <option value="">Select Year</option>
                                  <option value="1st Year ">1st Year</option>
                                  <option value="2nd Year">2nd Year</option>
                                  <option value="3rd Year">3rd Year</option>
                                  <option value="4th Year">4th Year</option>
                              </select><br>
                   
                              <label for="phone"><h6>Phone number</h6></label><br>
                              <input type="text" id="phone" placeholder="Phone Number" name="phone" required><br><br>
                   
                           </div>
                       </div>
                   </div>   
                  <button type="submit" name="submit" class="btn btn-success m-4"> Sign Up </button> 
                  <button  class="btn btn-danger m-4"><a href="homepage.php">Cancel</a></button>   
                   
               </form>
               <hr>
               <p>Already have an Account ? <a href="http://localhost/minor%20project/login.php">Login</a></p>
       </div>
    </div>
    
  </div>

</body>
</html>