<?php 

class Model_Post
{
	private $db;
	public function __construct()
	{
		$this->db = new Helper_Database();
	}

	public function getPost($id)
	{
		$post=$this->db->queryOne('SELECT * FROM post WHERE id=?', array($id));
		
		return $post;
	}

	public function getLatestPosts($number=5)
	{
		$post=$this->db->query("SELECT * FROM post ORDER BY date_create DESC LIMIT ".$number);
		
		return $post;
	}

	public function createPosts($title,$content)
	{
		$post=$this->db->execute('INSERT INTO post (title,content) values(?,?)', array($title,$content));
	
		return $post;
	}

}



 ?>

