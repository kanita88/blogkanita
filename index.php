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

$posts= new Model_Post();

$mesposts=$posts->getLatestPosts();

//var_dump($monpost);
//var_dump($mesposts);

include 'message.phtml';


 ?>