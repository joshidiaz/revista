 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class User_controller extends CI_Controller {
 
 	public function __construct()
 	{
 		parent::__construct();
 		//Do your magic here
 		$this->load->helper('url');
 		$this->load->model('account_model');
 	}

 	public function getAllUserData($iduser)
 	{
 		$userData = $this->account_model->getAllUserData($iduser);
 		$userDataJ = json_encode($userData);
 		echo $userDataJ;
 	}
 
 }
 
 /* End of file user_controller.php */
 /* Location: ./application/controllers/user_controller.php */