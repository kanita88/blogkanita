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
		$post=$this->db->queryOne('SELECT post.*,users.nom FROM post INNER JOIN users ON post.author_id=users.id WHERE post.id=?', array($id));
		
		return $post;
	}

	public function getLatestPosts($number=5)
	{
		$post=$this->db->query("SELECT post.*,users.nom FROM post INNER JOIN users ON post.author_id=users.id ORDER BY date_create DESC LIMIT ".$number);
		
		return $post;
	}

	public function createPosts($title,$content,$author_id)
	{
		$post=$this->db->execute('INSERT INTO post (title,content,author_id) values(?,?,?)', array($title,$content,$author_id));
	
		return $post;
	}

}



 ?>

