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

$post= new Model_Post();

if(isset($_POST['title']) && isset($_POST['content']))
{
	$edit=$post->updatePost($_POST['title'],$_POST['content'],$_GET['id']);

	header('location: article.php?id='.$_GET['id']);
}
else
{

	$monpost=$post->getPost($_GET['id']);
}

$dir='upload/pictures';  
$files=scandir($dir);


array_splice($files,0,2);

include 'edit.phtml';