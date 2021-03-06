<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	/**
	 * [index description]
	 * @return [type]
	 */
	public function index()
	{
		$this->load->view('head_view', NULL, FALSE);
		$this->load->view('dashboard_view', NULL, FALSE);
	}
	/**
	 * [getProfile description]
	 * @return [type]
	 */
	public function getProfile() 
	{
		$this->load->view('head_view', NULL, FALSE);
		$this->load->view('profile_view', NULL, FALSE);
	}
	/**
	 * [getEditor description]
	 * @return [type]
	 */
	public function getEditor() 
	{
		/*Referencias:
			https://duckduckgo.com/?q=ckeditor+in+codeigniter
			http://stackoverflow.com/questions/11814937/ckeditor-in-codeigniter#11815046
		*/

		$this->load->library('ckeditor');
		// $this->load->library('ckfinder');



		// $this->ckeditor->basePath = base_url().'asset/ckeditor/';
		// $this->ckeditor->config['toolbar'] = array(array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' ));
		// $this->ckeditor->config['toolbar'] = null;
		$this->ckeditor->config['language'] = 'es';
		$this->ckeditor->config['width'] = '100%';
		$this->ckeditor->config['height'] = '300px';            

		//Add Ckfinder to Ckeditor
		// $this->ckfinder->SetupCKEditor($this->ckeditor,'../../asset/ckfinder/'); 
		$this->load->view('head_view', NULL, FALSE);
		$this->load->view('editor_view', NULL, FALSE);
	}
	/**
	 * [getArtsListAutor description]
	 * @return [type]
	 */
	public function getArtsListAutor(){

		$this->load->view('head_view', NULL, FALSE);
		$this->load->view('artsListAutor_view', NULL, FALSE);
	}

}

/* End of file dashboard_controller.php */
/* Location: ./application/controllers/dashboard_controller.php */