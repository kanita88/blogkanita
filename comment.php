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
$comment= new Model_Comment();

$mescomment=$comment->getLatestComment();

if(isset($_POST['comment'])){
$commentplus=$comment->createComment($_POST['comment'], $_POST['id_post'], $_SESSION["id"]);
	if($commentplus==true)
	{
		header('Location: '.$_POST['cible'].'.php'.($_POST['cible']=='article'?'?id='.$_POST['id_post']:'')); //condition ternaire (if?then:else)
	}

	else
	{
		 header('Location: admin.php');
	}
}


//var_dump($monpost);
//var_dump($mesposts);

//include 'index.phtml';