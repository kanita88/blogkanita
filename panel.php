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

$post= new Model_Post();


if(isset($_POST['title']) && isset($_POST['content']))
{
	$postss=$post->createPosts($_POST['title'],$_POST['content'],$_SESSION['id']);
	if($postss==true)
	{
		header('location: index.php');
	}

	else
	{
		 echo "Veuillez mettre à vous votre article!";
	}
}

$dir='upload/pictures';  
$files=scandir($dir);


array_splice($files,0,2);

include 'panel.phtml';