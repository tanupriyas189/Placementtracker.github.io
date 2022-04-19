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

    <title>Placement traking website</title>
  <style>

* {box-sizing: border-box}

body{
  background-color:#f1f1f1;
  
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 90%;
  padding: 15px;
  position:relative;
  left : 5%;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  font-size:20px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.label1{
  position:relative;
  left : 5%;
  width : 90%;
  font-size:25px;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
  position:relative;
  left:40%;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
  position : relative;
  left : 5%;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  position:relative;
  width: 25%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
  position:relative;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
  .new_account{
    position:relative;
    left:5%; 
    width:90%;
    height: 50px;
    color:white;
    background-color:green;
    padding:5px;
    text-align : center;
  }
 
  </style>

  </head>

<body>
  
<form action="action_page.php" style="border:1px solid rgb(236, 232, 232); width : 50%; top:10px; position:relative; left:25%;">
  <div class="container" style="position:relative; left:10%; width:80%; background-color:rgb(209, 205, 205);">
    <h1 style="width :60% ; position : relative; left:40%; ">Sign Up</h1>
    <h1 class="new_account">Create New Account</h1>
    <hr  style="position:relative;  width:100%;">
    <label class="label1" for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required>
     <br>
    <label for="psw" class="label1"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <label for="psw-repeat" class="label1"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <br>   
    <label>
    </label>

    <p style="position:relative; left:5%; width:90%; font-size:20px;">Already have an account ? <a href="login.html" style="color:dodgerblue">Login</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>