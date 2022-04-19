
<?php
 session_start();
  
 $server = "localhost";
 $user = "root";
 $password = "";
 $db = "placement website";

 $con = mysqli_connect($server , $user , $password , $db);
 
 if(!$con){
    die("Connection Failed: ".mysqli_connect_error());
    }
?>


