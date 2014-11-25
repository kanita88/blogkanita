<?php  
$dir='pictures';  //récupérer la liste de tous les fichiers dans le dossiers 
$files=scandir($dir);


//var_dump($files);


array_splice($files,0,2);

//var_dump($files);



include "template.phtml"
 ?>