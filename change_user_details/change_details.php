<?php
session_start();
ob_start(); 

include("db.php");

$name=$_POST['realname'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$username=$_SESSION['uname'];

$query="select * from user where username='$username'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$rows=mysqli_num_rows($result);

if($name!=null || $name!=""){
    $query1="update user set name='$name' where username='$username'";
    $result1=mysqli_query($con,$query1);
}

if($email!=null || $email!=""){
    $query2="update user set email='$email' where username='$username'";
    $result2=mysqli_query($con,$query2);
}

if($phone!=null || $phone!=""){
    $query3="update user set phone='$phone' where username='$username'";
    $result3=mysqli_query($con,$query3);
}

header("Location: ../user/user_profile.php");

?>