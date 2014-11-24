<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autor_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model(array('autor_model','article_model'));
	}
	/**
	 * [getArticlesUser description]
	 * @return [type]
	 */
	public function getArticlesUser()
	{
		$iduser   =$this->session->userdata('iduser');
		$articles =$this->autor_model->getArticlesUser($iduser);
		echo '<table>';
		echo '<thead>
 				<tr>  
 					<th>Nombre del artículo</th>
 					<th>Revisión 1</th>
 					<th>Revisión 2</th>
 					<th>Estado</th>
 				</tr>
			</thead>';
		echo '<tbody>';
		foreach ($articles as $article ) {
			echo'<tr> 
					<td><a href="'.base_url().'index.php/autor_controller/getArticle/'.$article['idarticle'].'" title="">'.$article['articleName'].'</a></td>
					<td>'.$article['review1'].'</td>
					<td>'.$article['review2'].'</td>
					<td>'.$article['status'].'</td>
				</tr>';
		}
		echo '</tbody>';
		echo '</table>';
	}
	/**
	 * [getArticleAutor Hace..]
	 * @param  [int] $idarticle
	 * @return [string]
	 */
	public function getArticle($idarticle){
		$article=$this->autor_model->getArticle($idarticle);
		$data['article']=$article[0];

		$this->load->library('ckeditor');
		$this->load->library('ckfinder');



		$this->ckeditor->basePath = base_url().'asset/ckeditor/';
		//$this->ckeditor->config['toolbar'] = array(array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' ));
		$this->ckeditor->config['toolbar'] = null;
		$this->ckeditor->config['language'] = 'es';
		$this->ckeditor->config['width'] = '100%';
		$this->ckeditor->config['height'] = '300px';
		$this->load->view('head_view', NULL, FALSE);
		$this->load->view('editArticle_view.php', $data, FALSE);
	}

	public function updateArticle($idarticle){
		$dataArticle=$this->input->post();
		$this->article_model->updateArticle($idarticle, $dataArticle);
		redirect('dashboard_controller/getArtsListAutor');

	}

}

/* End of file autor_controller.php */
/* Location: ./application/controllers/autor_controller.php */