<?php
session_start();
ob_start(); 

include("db.php");

$pw1=$_POST['old'];
$old=md5($pw1);
$pw2=$_POST['new'];
$new=md5($pw2);

$username=$_SESSION['uname'];

$query="select * from user where username='$username' and password='$old' ";
$query2="update user set password='$new' where username='$username'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$rows=mysqli_num_rows($result);
				
if($rows==0) {
	header("Location: change_failed.html");
}

else{
	$result2=mysqli_query($con,$query2);
	header("Location: change_success.html");
}

?>