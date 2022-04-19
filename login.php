<?php
 session_start();
  
 $server = "localhost";
 $user = "root";
 $password = "";
 $db = "placement website";

 $con = mysqli_connect($server , $user , $password , $db);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">

    <title>Login</title>
	<link rel="stylesheet" href="CSS/login.css">
   
</head>

<body>
  
   <?php
     if(isset($_POST['submitbtn']))
	 {
		 $email = $_POST['email'];
		 $password = $_POST['password'];

		 $emailsearch = "select * from userdata where email ='$email' ";
		 $query = mysqli_query($con , $emailsearch);

		 $email_count = mysqli_num_rows($query);

		 if($email_count)
		 { 
			 $email_pass = mysqli_fetch_assoc($query);
			 $db_pass = $email_pass['Password'];

             $_SESSION['name'] = $email_pass['Name'];
			 $_SESSION['email'] = $email_pass['Email'];
			 $_SESSION['phone'] = $email_pass['Phone'];
			 $_SESSION['enrollment'] = $email_pass['Enrollment'];
			 $_SESSION['branch'] = $email_pass['Branch'];
			 $_SESSION['year'] = $email_pass['Year'];
			 $_SESSION['gender'] = $email_pass['Gender'];
			 $_SESSION['password'] = $email_pass['Password'];


			 
			 $pass_decode = password_verify($password , $db_pass);
			 
			 if($pass_decode)
			 {
				 ?>
				   <script>
				      alert("Logged in successfully.")
					  location.replace("internal_home_page.php");
				  </script>

				 <?php
                
			 }

			 else{
			     	?>
				   <script> alert("Incorrect password")</script>
				   <?php
			
			    }
			
		  }
		  else{
			?>
			<script> alert("Invalid mail")</script>
			<?php
		
		 }


	 }
   
   ?>	

	<form action="" method="post">
		<div class="imgcontainer">
			<h1 style="text-align:center; color :green; font-size:40px;font-weight:500;";>Login</h1>
		</div>

		<div class="container">
			<label><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" required>

			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<button type="submit" name="submitbtn">Login</button>
			<input type="checkbox" checked="checked"> Remember me
		</div>

		<div class="container" style="background-color:rgb(209, 205, 205);">
			<a href="homepage.php"	class="cancelbtn">Cancel</a>
			<span class="psw">Don't have an account ? <a href="Registration/registration.php">Sign in</a></span>
		</div>
	</form>

</body>

</html>
