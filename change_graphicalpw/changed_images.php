<?php
session_start();
ob_start(); 

include("db.php");
			
$var=$_GET['var'];
$_SESSION['a'][10]=$_GET['var'];

header("Location: update_graphical_pw.php");	

?>