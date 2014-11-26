<?php 

spl_autoload_register("my_autoload");
function my_autoload($class)
{
	$filepath=str_replace("_","/",$class).'.php'; 
	//str_replace(search, replace, subject)
	if(file_exists($filepath))
	{
		require_once($filepath);
	}
}
session_start();
if(isset($_SESSION['id'])==false){
	header('Location: admin.php');
	exit();
}



include 'contact.phtml';