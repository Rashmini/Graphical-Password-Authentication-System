<?php
session_start();
session_destroy();
session_start();
ob_start();

include("db.php");

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
			
$name=$_POST['name'];
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
		header('Location:log_img1.php');			
	}
	// invalid text pw
	else
	{	
		$query="select * from user where username='$name' and password='$password'" ;
		$result=mysqli_query($con,$query);
		$row=mysqli_fetch_array($result);
		$rows=mysqli_num_rows($result);
		if($rows==0)
			header('Location:invalid_textpw.html');			
	}
}
		
?>