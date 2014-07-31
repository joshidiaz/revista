<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_controller extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('account_model');
		//Do your magic here
	}
	public function index()
	{
		$this->load->view('head_view', NULL, FALSE);
		$this->load->view('newAccount_view', NULL, FALSE);
	}
	public function setUser()
	{
		$userData=$this->input->post();
		if (isset($userData) && !empty($userData)) {
			$idUser = $this->account_model->setUser($userData);
			if (isset($idUser) && !empty($idUser)) {
				echo "guardado";
			}
		}else{ 
			echo "Incorrecto";
		}
		// echo "<pre>";
		// 	print_r($userData);
		// echo "</pre>";
	}

	public function getDisciplines(){
		$disciplines=$this->account_model->getDisciplines();
			echo "<pre>";
				print_r($disciplines);
			echo "</pre>";
	}

	public function getSubdisciplines(){
		$subdisciplines=$this->account_model->getSubdisciplines();
			echo "<pre>";
				print_r($subdisciplines);
			echo "</pre>";
	}

	public function getSpecialisms(){
		$specialisms=$this->account_model->getSpecialisms();
			echo "<pre>";
				print_r($specialisms);
			echo "</pre>";
	}


}

/* End of file account_controller.php */
/* Location: ./application/controllers/account_controller.php */