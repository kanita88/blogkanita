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
$posts= new Model_Post();
$comments= new Model_Comment();

$post=$posts->getPost($_GET['id']);

include 'article.phtml';
 ?>