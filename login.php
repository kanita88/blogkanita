<?php 

	session_start();
	$_SESSION["users"]=$_POST["nom"];





 include ("login.phtml");
 ?>