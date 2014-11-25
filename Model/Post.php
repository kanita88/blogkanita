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

	public function getLatestPosts($offset=0, $number=5)
	{
		$post=$this->db->query("SELECT post.*,users.nom FROM post INNER JOIN users ON post.author_id=users.id ORDER BY date_create DESC LIMIT ".$offset.",".$number);
		
		return $post;
	}

	public function createPosts($title,$content,$author_id)
	{
		$post=$this->db->execute('INSERT INTO post (title,content,author_id) values(?,?,?)', array($title,$content,$author_id));
	
		return $post;
	}

	public function updatePost($title,$content,$id)
	{
		$post=$this->db->execute('UPDATE post SET title=?,content=? WHERE id=?',array($title,$content,$id));
	}

	public function deletPost($id)
	{
		$post=$this->db->execute('DELETE FROM post WHERE id ='.$id);
	}


}



 ?>

