<?php
date_default_timezone_set('Asia/Calcutta');
include 'dbh.inc.php';
include 'comments.inc.php';
?>

<html>
<head>
<title>
Comment section
</title>
<link rel="stylesheet" type="text/css" href="style1.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 

</head>
<body>
    <div class="container border mt-2  p-4">
        <div class="row text-center" >
            <div class="col-1 border">   <a class="back" href="http://localhost/minor%20project/internal_home_page.php">Back</a> </div>
            <div class="col-10"><h4>Welcome ! <?php echo $_SESSION['name']; ?> </h4> </div>
        </div>
    <hr>

    <div class="row ">
        <div class="col-2"></div>
        <div class="col-8">
           <?php
              echo "<form method='POST' action='".setComments($con)."' >
              <input type='hidden' name='uid' value='".$_SESSION['name']."'>
              <textarea placeholder='Add comments here.....' name= 'message'></textarea>
              <br>
              <br>
              <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
              <button type= 'submit' name='commentSubmit'>Comment</button>
              </form>";

              getComments($con);
            ?>

        </div>
        <div class="col-2"></div>
    </div>
       
 
    </div>


</body>