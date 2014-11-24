<?php 

class Model_Coment
{
	private $db;
	public function __construct()
	{
		$this->db = new Helper_Database();
	}

	public function getComment()
	{
		$coment=$this->db->query('SELECT * FROM users');
		
		return $coment;
	}

	public function createComment($nom,$pass,$email)
	{
		$coment=$this->db->execute('INSERT INTO comment(comment) values(?,?,?)', array($nom,$pass,$email));
	
		return $coment;
	}

}



 ?>