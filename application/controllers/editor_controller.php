<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editor_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
	}
	/**
	 * [getAllArticles description]
	 * @return [type]
	 */
	public function getAllArticles(){
		$articles=$this->article_model->getArtsList();
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
		if (isset($articles) && !empty($articles)) {
			foreach ($articles as $article ) {
				$status = ($article['status'] == 1) ? 'Borrador' : 'Enviado para revisión' ;
				echo'<tr> 
						<td>'.$article['articleName'].'</td>
						<td>'.$article['review1'].'</td>
						<td>'.$article['review2'].'</td>
						<td>'.$status.'</td>
					</tr>';
			}
		}
		echo '</tbody>';
		echo '</table>';
	}



}

/* End of file editor_controller.php */
/* Location: ./application/controllers/editor_controller.php */