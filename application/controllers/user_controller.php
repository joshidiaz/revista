 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class User_controller extends CI_Controller {
 
 	public function __construct()
 	{
 		parent::__construct();
 		//Do your magic here
 		$this->load->helper('url');
 		$this->load->library('session');
 		$this->load->model('account_model');
 	}

 	public function getAllUserData(){
 		$iduser = $this->session->userdata('iduser');
 		$userData = $this->account_model->getAllUserData($iduser);
 		$userDataJ = json_encode($userData);
 		echo $userDataJ;
 	}

 	public function getDisciplinesJson(){
 		$disciplines = $this->account_model->getDisciplines();
 		$disciplinesJ = json_encode($disciplines);
 		echo $disciplinesJ;
 	}

 	public function getSubDisciplinesJson(){
		$subdisciplines = $this->account_model->getSubdisciplines();
		$subdisciplinesJ = json_encode($subdisciplines); 
		echo $subdisciplinesJ;
	}

	public function getSpecialismsJson(){
		$specialisms = $this->account_model->getSpecialisms();
		$specialismsJ = json_encode($specialisms);
		echo $specialismsJ;
	}
 
 }
 
 /* End of file user_controller.php */
 /* Location: ./application/controllers/user_controller.php */