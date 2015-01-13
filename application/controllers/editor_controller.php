<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editor_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
	}

	public function getAllArticles(){
		$articles=$this->article_model->getArtsList();
		// echo '<table>';
		// echo '<thead>
 	// 			<tr>  
 	// 				<th>Nombre del artículo</th>
 	// 				<th>Revisión 1</th>
 	// 				<th>Revisión 2</th>
 	// 				<th>Estado</th>
 	// 			</tr>
		// 	</thead>';
		// echo '<tbody>';
		// if (isset($articles) && !empty($articles)) {
		// 	foreach ($articles as $article ) {
		// 		$status = ($article['status'] == 1) ? 'Borrador' : 'Enviado para revisión' ;
		// 		echo'<tr> 
		// 				<td><a href="'.base_url().'index.php/autor_controller/getArticle/'.$article['idarticle'].'">'.$article['articleName'].'</a></td>
		// 				<td>'.$article['review1'].'</td>
		// 				<td>'.$article['review2'].'</td>
		// 				<td>'.$status.'</td>
		// 			</tr>';
		// 	}
		// }
		// echo '</tbody>';
		// echo '</table>';
		echo "<pre>";
			print_r($articles);
		echo "<pre>";

	}



}

/* End of file editor_controller.php */
/* Location: ./application/controllers/editor_controller.php */