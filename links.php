<?php
 session_start();
  
 $server = "localhost";
 $user = "root";
 $password = "";
 $db = "user_data";

 $con = mysqli_connect($server , $user , $password , $db);
?>



<?php
   if(isset($_POST['submit']))
   {
      $link = mysqli_real_escape_string($con , $_POST['link']);
 

          $insertquery = " insert into links( link) values('$link' )";
          
          $iquery =  mysqli_query( $con , $insertquery);

          if($con)
          {
            ?>
            <script>alert("Account Created Successfully.");</script>
            <?php

             
          }
        
        else {
          ?>
            <script>alert("error");</script>
            <?php
          
        }
      

   }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">

    <title>Sign up</title>
    

</head>

<body>
<form method="POST" action="";  style="border:1px solid rgb(236, 232, 232); width : 50%; top:10px; position:relative; left:25%;">
  <div class="container" style=" border-radius:10px; position:relative;box-shadow:0px 10px 10px rgba(0,0,0,1); left:10%; width:80%; background-color:rgb(209, 205, 205);">
    
    <label class="label1" for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="link" required>
     <br>
   
      <button type="submit" name="submit" class="signupbtn">Submit</button>
    </div>
  </div>
</form>
<div style="width:200px; height : 100px;">


<?php
$conn = mysqli_connect("localhost", "root", "", "user_data");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT *  FROM links";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
    ?>
    <h1>links<h1>
    <?php

while($row = $result->fetch_assoc()) {
    ?>
    <br>
    <?php

echo $row["link"]."<br>";
}
} else { echo "0 results"; }
$conn->close();
?>

</div>



</body>
</html>


