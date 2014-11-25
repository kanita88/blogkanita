<?php 

class Model_Comment
{
	private $db;
	public function __construct()
	{
		$this->db = new Helper_Database();
	}

	public function getCommentForPost($id,$number=2)
	{
		$comment=$this->db->query('SELECT * FROM comment WHERE id_post='.$id." ORDER BY date DESC LIMIT ".$number);
		
		return $comment;
	}

	public function getLatestComment($number=2)
	{
		$comment=$this->db->query('SELECT * FROM comment ORDER BY date DESC LIMIT '.$number);
		
		return $comment;
	}

	public function createComment($comment,$id_post,$author)
	{
		$comment=$this->db->execute('INSERT INTO comment(comment,id_post,author) values(?,?,?)', array($comment,$id_post,$author));
	
		return $comment;
	}

	public function getNumberOfPage($id_post)
	{
		$comment=$this->db->queryOne('SELECT COUNT(*) AS number FROM comment WHERE id_post=?', array($id_post));
		
		return $comment["number"];

	}



}



 ?>