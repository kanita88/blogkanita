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
if(isset($_SESSION["nom"]))
{
	header('Location: panel.php');
	exit();
}

$users= new Model_Users();
//$mesusers=$users->getUsers();
if(isset($_POST['nom'])&&($_POST['pass'])){
	$monuser=$users->valideMember($_POST['nom'],$_POST['pass']);
	//var_dump($mesusers);
	if($monuser!=null)
	{
		
		$_SESSION["nom"]=$_POST["nom"];
		$_SESSION["id"]=$monuser["id"];
		header('location: panel.php');
	}

	else
	{
		 $error = "Nom utilisateur et mot de passe sont incorrect!";
	}


}



include 'admin.phtml';
 ?>