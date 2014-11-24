<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autor_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

	public function getArticlesUser($iduser){
		$this->db->select('*');
		$this->db->from('article');
		$this->db->join('article_has_user','article_has_user.article_idarticle=article.idarticle');
		$this->db->where('article_has_user.user_iduser',$iduser);
		$this->db->order_by('article.articleName','desc');
		$query=$this->db->get();
		if ($query->num_rows()>0) {
			$articles=$query->result_array();
			return $articles;
		}else{
			return 0 ;
		}
	}

	public function getArticle($idarticle){
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where('idarticle',$idarticle);
		$query=$this->db->get();
		if ($query->num_rows()>0) {
			$article=$query->result_array();
			return $article;
		}else{
			return 0 ;
		}
	}
}