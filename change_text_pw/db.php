<?php 
		$server="localhost";
		$user="root";
		$password="";
		$database="gpas_final";
		$con=mysqli_connect($server,$user,$password,$database);
		if(!$con)
		echo 'Connection failed !';
?>	