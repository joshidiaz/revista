<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_controller extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('session','email'));
		$this->load->model('account_model');
		//Do your magic here
	}
	/**
	 * [index description]
	 * @return [type]
	 */
	public function index()
	{
		$this->load->view('head_view', NULL, FALSE);
		$this->load->view('newAccount_view', NULL, FALSE);
	}
	/**
	 * [setUser description]
	 */
	public function setUser()
	{
		$userData=$this->input->post();
		if (isset($userData) && !empty($userData) && !empty($userData['email']) ) {

			$userName             = $this->generateUser($userData['name'],$userData['lastName']);
			$password             = $this->generatePassword(8, TRUE, TRUE);
			$userData['userName'] = $userName;
			$userData['password'] = $password;
			$iduser               = $this->account_model->setUser($userData);
			echo $iduser;
		}else{ 
			echo "Incorrecto";
		}
	}
	/**
	 * [updateUser description]
	 * @return [type]
	 */
	public function updateUser(){
		$dataUser = $this->input->post();
		$iduser   = $this->session->userdata('iduser');
		$request  = $this->account_model->updateUser($dataUser,$iduser);
		echo($request);
	}
	/**
	 * [sendConfirmation description]
	 * @return [type]
	 */
	public function sendConfirmation(){
		$this->load->view('head_view', FALSE);
		$this->load->view('confirmation_view', FALSE);
	}
	/**
	 * [sendEmail description]
	 * @return [type]
	 */
	public function sendEmail(){
		$iduser = $this->input->post('iduser');
		$userData = $this->account_model->getAllUserData($iduser);
		$credentials = $this->account_model->getCredentials($iduser);
		//Configuración para mandar el correo
		// $config['protocol'] = 'mail';
		//$config['wordwrap'] = FALSE;				
		//$config['mailtype']='html';
		
		$config['protocol']     = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.googlemail.com';
		$config['smtp_port']    = '465';
		$config['smtp_user']    = 'magazineci3m@gmail.com';
		$config['smtp_pass']    = 'qwerty1010';
		
		$config['smtp_timeout'] = '7';
		$config['charset']      = 'utf-8';
		$config['newline']      = "\r\n";
		$config['mailtype']     = 'html'; // or html
		$config['validation']   = TRUE; // bool whether to validate email or not
		
		
		$this->email->initialize($config);
		$this->email->from('magazineci3m@gmail.com', 'CI3M');
		$this->email->to($userData['email']);
		$this->email->subject('Gracias por registrarse');
		$msj = '<html>
					<head>
					    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
					    
					</head>
					<body>
						<table width="100%" style="background-image:url('.base_url().'statics/img/image2.jpeg);">
						<tr>
						<br><br><br><br><br><br><br><br><br><br><br><br>
						</tr>
						<tr>
						Su usuario es '.$credentials['userName'].'<br><br>
						Su contraseña es '.$credentials['password'].'<br><br>


						A T E N T A M E N T E<br><br>

						<br>
						<br>
						Universidad Autonoma Metropolitana Unidad Iztapalapa<br>
						<i>Casa abierta al tiempo</i>
						</tr>
						</table>				
						
					</body>
				</html>';
		
		$this->email->message($msj);		
		if(!($this->email->send()))
		{
		   show_error($this->email->print_debugger());
		}
		echo "enviado";
	}
	/**
	 * [getDisciplines description]
	 * @return [type]
	 */
	public function getDisciplines(){
		$disciplines=$this->account_model->getDisciplines();
		echo "<option value=''>Seleccione una disciplina</option>";
		foreach ($disciplines as $discipline) {
			echo "<option value=".$discipline['iddiscipline'].">".$discipline['disciplineName']."</option>";
		}
	}
	/**
	 * [getSubdisciplines description]
	 * @return [type]
	 */
	public function getSubdisciplines(){
		$subdisciplines=$this->account_model->getSubdisciplines();
		echo "<option value=''>Seleccione una subdisciplina</option>";
		foreach ($subdisciplines as $subdiscipline) {
			echo "<option value=".$subdiscipline['idsubDiscipline'].">".$subdiscipline['subdisciplineName']."</option>";
		}
	}
	/**
	 * [getSpecialisms description]
	 * @return [type]
	 */
	public function getSpecialisms(){
		$specialisms=$this->account_model->getSpecialisms();
		echo "<option value=''>Seleccione una especialidad</option>";
		foreach ($specialisms as $specialism) {
			echo "<option value=".$specialism['idspecialism'].">".$specialism['specialismName']."</option>";
		}
	}
	/**
	 * [generateUser description]
	 * @param  [type]
	 * @param  [type]
	 * @return [type]
	 */
	private function generateUser($name, $lastName){
		$first = $name[0].$lastName[0];
		$date = date('Dy');
		$number = rand(111,999);
		$userName = $first.$date.$number;
		return strtoupper($userName);
		
	}
	/**
	 * [generatePassword description]
	 * @param  integer
	 * @param  boolean
	 * @param  boolean
	 * @return [type]
	 */
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