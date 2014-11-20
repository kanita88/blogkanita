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
//$mesusers=$users->getUsers();
if(isset($_POST['nom'])&&($_POST['pass'])){
	$mesusers=$users->valideMember($_POST['nom'],$_POST['pass']);
	var_dump($mesusers);
}


include 'admin.phtml';
 ?>