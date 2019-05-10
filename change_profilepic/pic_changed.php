<?php
session_start();

$name=$_SESSION['uname'];
$allowedExts = array("jpg","jpeg","gif","png","JPG","PNG","GIF");
$tmp = explode(".", $_FILES["file"]["name"]);
$extension = end($tmp); 
//echo ''.$extension.'';
if ((($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/gif") 
|| ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/JPG") || ($_FILES["file"]["type"] == "image/PNG") 
|| ($_FILES["file"]["type"] == "image/GIF") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 6000000) &&
 in_array($extension, $allowedExts)) 
	{
		if ($_FILES["file"]["error"] > 0)
			{
			echo "Return Code : " .$_FILES["file"]["error"]. "<br />";
			}
				else 
				{
				$photo=$name.".".$extension;

						move_uploaded_file($_FILES["file"]["tmp_name"],"../user/images/user/".$photo); 
						header("Location: update_success.html");
						
						
						include ("db.php");
						$picname="../user/images/user/".$name.".".$extension;
						$query="update user set userimage='$picname' where username='$name'";
						$result=mysqli_query($con,$query);
						
				}
	}

else
{
	header("Location: update_failed.html");
}
?>