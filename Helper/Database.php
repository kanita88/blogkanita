<?php 

class Helper_Database
{
	private $db;
	public function __construct()
	{
		//aller chercher la configuration dans le .ini
		$config=new Helper_Config("config.ini");
		$config->get("user","database");
		$user=$config->get("user","database");
		$password=$config->get("password","database");
		$dbname=$config->get("dbname","database");
		//instansier un nouvel objet PDO et la stocker dans le $db
		$this->db=new PDO('mysql:host=localhost;dbname='.$dbname,$user,$password);
		//passer les transaction en utf8
		$this->db->exec("SET NAMES UTF8"); 		
	}
	public function query($queryString,$data=array())
	{

		$query=$this->db->prepare($queryString);
		$query->execute($data);
		
		return $query->fetchAll(PDO::FETCH_ASSOC);

	}

	public function queryOne($queryString,$data=array())
	{

		$query=$this->db->prepare($queryString);
		$query->execute($data);
		
		return $query->fetch(PDO::FETCH_ASSOC);

	}
	public function execute($queryString,$data=array())
	{
		$query=$this->db->prepare($queryString);
		$query->execute($data);
		
		return $this->db->lastInsertId();
	}
}