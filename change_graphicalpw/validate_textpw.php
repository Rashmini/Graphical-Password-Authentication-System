<?php
session_start();
ob_start();

include("db.php");

session_start();

$name=$_SESSION['uname'];
$pw=$_POST['password'];
$password=md5($pw);
$query="select * from user where username='$name' and password='$password'" ;
$result=mysqli_query($con,$query);
if($result)
{
	$rows=mysqli_num_rows($result);
	if($rows>0)
	{ 				
		$row=mysqli_fetch_array($result);
		$_SESSION['uname']=$name;
		header('Location:change_img1.php');			
	}
	else
	{	
	header('Location:invalid_textpw.html');
	}
}
		
?>