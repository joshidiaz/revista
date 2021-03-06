<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function setArticle($article){
		$this->db->insert('article',$article);
		$this->db->select_max('idarticle');
		$consulta=$this->db->get('article');
		$aux=$consulta->result_array();
		return ($aux[0]['idarticle']);

	} 
	
    public function setArticleHasUser($data){
   
		$this->db->insert('article_has_user',$data);
		return 1;
		
    }

    public function updateArticle($idarticle, $dataArticle){
    	$this->db->where('idarticle', $idarticle);
		$this->db->update('article', $dataArticle);
		return 1;
    }
    
    public function sendArticle($idarticle){
    	$dataArticle = array('status' => 2);
    	$this->db->where('idarticle', $idarticle);
    	$this->db->update('article',$dataArticle);
    	return 1;
    }

    public function getArtsList(){
    	$this->db->select('*');
    	$this->db->from('article');
    	$this->db->where('status',2);
    	$this->db->order_by('articleName','desc');
    	$query=$this->db->get();
		if ($query->num_rows()>0) {
			$articles=$query->result_array();
			return $articles;
		}else{
			return 0 ;
		}

    }



}

/* End of file article_model.php */
/* Location: ./application/models/article_model.php */