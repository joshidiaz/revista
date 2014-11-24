<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('article_model');
	}
	public function setArticleAutor()
	{
		//obtener el id autor
		$article=$this->input->post();
		$idArticle=$this->article_model->setArticle($article);
		$iduser = $this->session->userdata('iduser');
		$data = array('article_idarticle' => $idArticle, 'user_iduser' => $iduser);
		$this->article_model->setArticleHasUser($data);
		redirect('dashboard_controller/getArtsListAutor');
								
	}


}

/* End of file article_controller.php */
/* Location: ./application/controllers/article_controller.php */