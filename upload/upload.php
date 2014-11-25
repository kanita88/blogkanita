<?php 

$uploaddir='pictures/';

$uploadfile=$uploaddir.basename($_FILES['userfile']['name']);



if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
{
	echo "ok";
}
else
{
	echo "non";
}


header ('location:indexs.php');
 ?>