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

	public function createUsers($nom,$pass,$email)
	{
		$users=$this->db->execute('INSERT INTO users(nom,pass,email) values(?,?,?)', array($nom,$pass,$email));
	
		return $users;
	}

}



 ?>