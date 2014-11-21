<?php
class Helper_Config
{
	public $config=array();

	public function __construct($fileconfig)
	{  
		if (file_exists($fileconfig))
		{
			
		$this->config=parse_ini_file($fileconfig,true);
		//var_dump($config);
		}
		else
		{
			error_log("le fichier n'existe pas!");
		}
	}

	public function get($value,$categorie=null)
	{
		if($categorie!=null)
		{
			return $this->config[$categorie][$value];
		}
		else
		{
			error_log("la catégorie n'existe pas!");
		}
		
	}




}