<?php

function setComments($con){

if (isset($_POST['commentSubmit'])){
$uid=$_POST['uid'];
$date=$_POST['date'];
$message=$_POST['message'];
$sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
$result = $con->query($sql);
}

}

function getComments($con){
$sql ="SELECT * FROM comments";
$result = $con->query($sql);
while($row =$result->fetch_assoc()){
echo "<div class='comment-box'><p>";
echo $row['uid']."<br>";
echo nl2br($row['message'])."<br><br>";
echo $row['date'];

echo "</p>

<form class='edit-form' method= 'POST' action='editcomment.php'>
<input type='hidden' name='cid' value='".$row['cid']."'>
<input type='hidden' name='uid' value='".$row['uid']."'>
<input type='hidden' name='date' value='".$row['date']."'>
<input type='hidden' name='message' value='".$row['message']."'>
<button>Edit</button>
</form>

<form class='delete-form' method= 'POST' action='".deleteComments($con)."'>
<input type='hidden' name='cid' value='".$row['cid']."'>
<input type='hidden' name='uid' value='".$row['uid']."'>
<input type='hidden' name='date' value='".$row['date']."'>
<input type='hidden' name='message' value='".$row['message']."'>
<button name='comentDelete'>Delete</button>
</form>
</div>";
}
}

function deleteComments($con){

    if (isset($_POST['comentDelete'])){
        $cid=$_POST['cid'];
        $uid=$_POST['uid'];
        $date=$_POST['date'];
        $message=$_POST['message'];
        $sql = " DELETE FROM `comments` WHERE cid='$cid' ";
        $result = $con->query($sql);
        header("location: commentindex.php");
        }
}

function editComments($con){
if (isset($_POST['commentSubmit'])){
$cid=$_POST['cid'];
$uid=$_POST['uid'];
$date=$_POST['date'];
$message=$_POST['message'];
$sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
$result = $con->query($sql);
header("location: commentindex.php");
}
}


?>