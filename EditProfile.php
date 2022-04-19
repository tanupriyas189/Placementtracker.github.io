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
   
    <style>
        input , select{
            width : 350px;
            height : 40px;
            border-radius : 10px;
            background-color : transparent;
        }

       
    </style>


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
            <li><a href="#contact">Contact us</a> </li>

        </ul>
        <a href="logout.php" class="login-btn"> Log out</a>

    </nav>
  </section>
   <div class="container border">
       <div class="row  p-2">
          <div class="col-3"> 
              <img width="200" height="200" src="images/profile.png">
              
              <input type="file" name="uploadfile">
              

          </div>
          <div class="col-9 border p-2"> 
              <h3>
                  Edit Profile
              </h3>
              <br>
                  <form>
                      <div class="container">
                          <div class="row">
                              <div class="col-6">  
                                 <label for="uname"><h5>Email</h5></label><br>
                                 <input type="text" id="uname" value='rubyprajapaati532@gmail.com'><br>

                                 <label for="name"><h5>Name</h5></label><br>
                                 <input type="text" id="name" value='Ruby prajapati'><br>

                                 <label for="password"><h5>Password</h5></label><br>
                                 <input type="password" id="password" value='123'><br>

                                 <label for="gender"><h5>Gender</h5></label><br>
                                 <select>
                                     <option value="Male">Male</option>
                                     <option value="Female">Female</option>
                                     <option value="Other">Other</option>
                                 </select>
                                                  
                              </div>
                              <div class="col-6"> 
                                 <label for="enroll"><h5>Enrollment Number</h5></label><br>
                                 <input type="text" id="enroll" value="0901CS191102"><br>

                                 <label for="branch"><h5>Branch</h5></label><br>
                                 <input type="text" id="branch" value='CSE'><br>
                      
                                 <label for="year"><h5>Year</h5></label><br>
                                 <select id="year" value='3rd year'>
                                     <option value="1st Year ">1st Year</option>
                                     <option value="2nd Year">2nd Year</option>
                                     <option value="3rd Year">3rd Year</option>
                                     <option value="4th Year">4th Year</option>
                                 </select><br>
                      
                                 <label for="phone"><h5>Phone number</h5></label><br>
                                 <input type="text" id="phone" value='2247839574'><br>
                      
                              </div>
                          </div>
                      </div>   
                     <button type="submit" class="btn btn-success m-4"> Save Changes </button>  
                      
                  </form>
          </div>
       </div>
       
   </div>
   <div class="container border p-4">
       <h2 class="text-success"> Favorites</h2>
       <div class=" container border "  >
           <div class="row p-2">
               <div class="col-11" >
                   <h4> Amazon </h4>
                     <p>Amazon is product base company. Transition graph can be interpreted as
                        a flowchart for an algorithm recognizing a language. A successful
                     </p>
               </div>
               <div class="col-1">
                   <button class="btn btn-danger"> Remove</button>
               </div>
           </div>
       </div>

   </div>



</body>
</html>
