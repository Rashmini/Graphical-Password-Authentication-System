<?php
session_start();
ob_start();
?>

<html>
<head>
	<title>Successful!</title>
</head>

<body>

<?php

include('db.php');		
$_SESSION['layer6']=$_GET['var'];
$name=$_SESSION['uname'];
$layer1=$_SESSION['layer1'];
$layer2=$_SESSION['layer2'];
$layer3=$_SESSION['layer3'];
$layer4=$_SESSION['layer4'];
$layer5=$_SESSION['layer5'];
$layer6=$_SESSION['layer6'];

	$result=mysqli_query($con,"select image1, slice1, image2, slice2, image3, slice3 from user where username='$name'");
		if (mysqli_num_rows($result)>0)
		{
			$row=mysqli_fetch_array($result);

			if($row[0]==$layer1 && $row[1]==$layer2 && $row[2]==$layer3 && $row[3]==$layer4 && $row[4]==$layer5 && 
			$row[5]==$layer6){
			header('Location:../user/user_profile.php');
			}
			// invaid login details
			else 
			{
			header('Location:invalid_textpw.html');
			$_SESSION['selectagain']=1;
			}
		}
		
?>

</body>
</html>