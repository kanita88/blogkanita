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
$users= new Model_Users();
if(isset($_POST['nom'])&&($_POST['pass'])){
$createusers=$users->createusers($_POST['nom'],$_POST['pass'],$_POST['email']);
	if($createusers==true)
	{
		header('location: admin.php');
	}

	else
	{
		 echo "Veuillez enregistrer à nouveau!";
	}


}

include 'registrer.phtml';
 ?>