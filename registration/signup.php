<?php
session_start();
ob_start();

include("db.php");

	$name=$_POST['name'];
	$pw=$_POST['password'];
	$password=md5($pw);
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$realname=$_POST['realname'];
	
	// username already used
	$result=mysqli_query($con,"select * from user where username='$name'");
	if (mysqli_num_rows($result)>0)
	{
		header('Location:username_failed.html');
		exit;
		return;
	}

	// email already used
	$result=mysqli_query($con,"select * from user where email='$email'");
	if (mysqli_num_rows($result)>0)
	{
		header('Location:email_failed.html');
		exit;
		return;
	}
		
	// phone already used
	$result=mysqli_query($con,"select * from user where phone=$phone");
	if (mysqli_num_rows($result)>0)
	{
		header('Location:phone_failed.html');
		exit;
		return;
	}
					
	$_SESSION['a'][0]=$name;
	$_SESSION['a'][1]=$password;
	$_SESSION['a'][2]=$realname;
	$_SESSION['a'][3]=$email;
	$_SESSION['a'][4]=$phone;
	header('Location:registration_img1.php');

?>