<?php 

class Model_Users
{
	private $db;
	public function __construct()
	{
		$this->db = new Helper_Database();
	}

	public function getUsers()
	{
		$users=$this->db->query('SELECT * FROM users');
		
		return $users;
	}

	public function valideMember($nom,$pass)
	{
		$users=$this->db->queryOne('SELECT * FROM users WHERE nom=? and pass=?', array($nom,$pass));
		
		return $users;
	}
}



 ?>