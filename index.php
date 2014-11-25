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

if(isset($_GET["page"])){
	$page=$_GET["page"];
}
else
{
	$page=1;
}

echo $page;

$mesposts=$posts->getLatestPosts();




//var_dump($monpost);
//var_dump($mesposts);
//var_dump($mescomment);

include 'index.phtml';


 ?>