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
		if (isset($userData) && !empty($userData) && !empty($userData['email']) ) {

			$userName = $this->generateUser($userData['name'],$userData['lastName']);
			$password = $this->generatePassword(8, TRUE, TRUE);
			$userData['userName'] = $userName;
			$userData['password'] = $password;
					// echo "<pre>";
					// 	print_r($userData);
					// echo "</pre>";
			$idUser = $this->account_model->setUser($userData);
			echo "correcto";
			// if (isset($idUser) && !empty($idUser)) {
			// 	echo "guardado";
			// }
		}else{ 
			echo "Incorrecto";
		}
		// echo "<pre>";
		// 	print_r($userData);
		// echo "</pre>";
	}

	public function getDisciplines(){
		$disciplines=$this->account_model->getDisciplines();
		echo "<option value=''>Seleccione una disciplina</option>";
		foreach ($disciplines as $discipline) {
			echo "<option value=".$discipline['iddiscipline'].">".$discipline['disciplineName']."</option>";
		}
	}

	public function getSubdisciplines(){
		$subdisciplines=$this->account_model->getSubdisciplines();
		echo "<option value=''>Seleccione una subdisciplina</option>";
		foreach ($subdisciplines as $subdiscipline) {
			echo "<option value=".$subdiscipline['idsubDiscipline'].">".$subdiscipline['subdisciplineName']."</option>";
		}
	}

	public function getSpecialisms(){
		$specialisms=$this->account_model->getSpecialisms();
		echo "<option value=''>Seleccione una especialidad</option>";
		foreach ($specialisms as $specialism) {
			echo "<option value=".$specialism['idspecialism'].">".$specialism['specialismName']."</option>";
		}
	}

	private function generateUser($name, $lastName){
		$first = $name[0].$lastName[0];
		$date = date('Dy');
		$number = rand(111,999);
		$userName = $first.$date.$number;
		return strtoupper($userName);
		
	} 


	private function generatePassword($length=8,$uc=TRUE,$n=TRUE){
	    $source = 'abcdefghijklmnopqrstuvwxyz';
	    if($uc == 1) $source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    if($n==1) $source .= '1234567890';
	   
	    if($length>0){
	        $rstr = "";
	        $source = str_split($source,1);
	        for($i=1; $i<=$length; $i++){
	            mt_srand((double)microtime() * 1000000);
	            $num = mt_rand(1,count($source));
	            $rstr .= $source[$num-1];
	        }
	    }
	    return $rstr;
	}
}

/* End of file account_controller.php */
/* Location: ./application/controllers/account_controller.php */