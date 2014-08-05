<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('account_model');

	}
	public function index()
	{
		$this->load->view('head_view', NULL, FALSE);
		$this->load->view('login_view', NULL, FALSE);
	}

	public function userAuthenticate(){
		$userData = $this->input->post();
		$iduser = $this->account_model->userAuthenticate($userData);

		if($iduser != 0){
			$newData = array(
				'userName' => $userData['userName'],
				'password' => $userData['password'],
				'iduser' => $iduser,
				'logged_in' => TRUE
  			);
 	 		$this->session->set_userdata($newData);
 	 		$_SESSION = $this->session->all_userdata(); 
 	 		if(!empty($_SESSION['userName'])){
 				echo 'correcto';
 			} 
 		} else {
 			$this->session->sess_destroy();
 			echo "incorrecto";
 		}
	}

	public function rebootSession(){
	 	$this->session->sess_destroy(); 
 	}

}

/* End of file login_controller.php */
/* Location: ./application/controllers/login_controller.php */