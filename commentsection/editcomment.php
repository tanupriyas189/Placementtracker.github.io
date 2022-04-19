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
</head>
<body>

<?php
$cid=$_POST['cid'];
$uid=$_POST['uid'];
$date=$_POST['date'];
$message=$_POST['message'];

echo "<form method='POST' action='".editComments($con)."' >
<input type='hidden' name='cid' value='".$_POST['cid']."'>
<input type='hidden' name='uid' value='".$_POST['uid']."'>
<input type='hidden' name='date' value='".$_POST['date']."'>
<textarea name= 'message'>".$message."</textarea>
<br>
<button type= 'submit' name='commentSubmit'>Edit</button>
</form>";

getComments($con);
?>

</body>