<?php
session_start();
 $server = "localhost";
 $user = "root";
 $password = "";
 $db = "placement website";

 $con = mysqli_connect($server , $user , $password , $db);
?>


<?php
   if(isset($_POST['submit'])){
      $email = mysqli_real_escape_string($con ,$_POST['email']);
      $name = mysqli_real_escape_string($con , $_POST['name']);
      $password = mysqli_real_escape_string($con ,$_POST['password']);
      $gender = mysqli_real_escape_string($con ,$_POST['gender']);
      $enrollment = mysqli_real_escape_string($con ,$_POST['enrollment']);
      $branch = mysqli_real_escape_string($con ,$_POST['branch']);
      $year= mysqli_real_escape_string($con ,$_POST['year']);
      $phone = mysqli_real_escape_string($con ,$_POST['phone']);

      $pass = password_hash( $password , PASSWORD_BCRYPT);

      $emailquery = " select * from userdata where Email = '$email' ";
      $query = mysqli_query( $con , $emailquery);

      $emailcount = mysqli_num_rows($query);

      if($emailcount>0)
      {
            ?>
            <script>alert("Email Already Exist");</script>
            <?php
      }
      else {

          $insertquery = " insert into userdata( Name ,Enrollment, Email , Password ,Branch,Year,Phone,Gender ) values( '$name' ,'$enrollment' , '$email' , '$pass' ,'$branch' ,'$year' ,'$phone' , '$gender' )";
          
          $iquery =  mysqli_query( $con , $insertquery);

          if($con)
          {
            ?>
            <script>alert("Account Created Successfully.");</script>
            <?php          
          }
        
      }

   }


?>
  
