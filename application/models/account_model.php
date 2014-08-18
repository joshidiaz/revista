<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function setUser($data){		
		$this->db->insert('user', $data);
		$this->db->select_max('iduser');
		$consulta=$this->db->get('user');
		$aux=$consulta->result_array();
		return ($aux[0]['iduser']);

	}

	public function updateUser($userData, $iduser){
		$this->db->where('iduser', $iduser);
		$this->db->update('user', $userData);
		return 1;
	}

	public function getCredentials($iduser){
		$this->db->select('userName, password');
 		$this->db->from('user');
 		$this->db->where('iduser',$iduser);
 		$query = $this->db->get();
 		if($query->num_rows() > 0){

 			$credentials = $query->result_array();
 			$credentials = $credentials[0];

 			return $credentials;

 		}else{
 			return 0;
 		}
	}

	public function getDisciplines(){
		$this->db->select('*');
		$this->db->from('discipline');
		$query=$this->db->get();

		if ($query->num_rows()>0) {
			foreach ($query->result_array() as $discipline) {
				$disciplines[$discipline['iddiscipline']]=$discipline;
				
				// echo"<pre>";
				// 	print_r($usuarios);
				// echo"</pre>";
			}
			return $disciplines;
		}
		else{return 0;}
	}

	public function getSubdisciplines(){
		$this->db->select('*');
		$this->db->from('subDiscipline');
		$query=$this->db->get();

		if ($query->num_rows()>0) {
			foreach ($query->result_array() as $subDiscipline) {
				$subDisciplines[$subDiscipline['idsubDiscipline']]=$subDiscipline;
				
				// echo"<pre>";
				// 	print_r($usuarios);
				// echo"</pre>";
			}
			return $subDisciplines;
		}
		else{return 0;}
	}

	public function getSpecialisms(){
		$this->db->select('*');
		$this->db->from('specialism');
		$query=$this->db->get();

		if ($query->num_rows()>0) {
			foreach ($query->result_array() as $specialism) {
				$specialisms[$specialism['idspecialism']]=$specialism;
				
				// echo"<pre>";
				// 	print_r($usuarios);
				// echo"</pre>";
			}
			return $specialisms;
		}
		else{return 0;}
	}

	public function userAuthenticate($accountData){
	 	$this->db->select('iduser,userName,password');
	 	$this->db->from('user');
	 	$this->db->where('userName', $accountData['userName']);
	 	$query = $this->db->get();

	 	if($query->num_rows() > 0){
		 	$user = $query->result_array();
		 	$pass = $user[0]['password'];
		 	$iduser = $user[0]['iduser'];
		 	if($accountData['password'] == $pass){
		 		return $iduser;
		 	}else{
		 		return 0;
		 	}
	 	}else{
	 		return 0;
	 		// echo "No entré";
	 	}
 	}

	public function getAllUserData($iduser)
 	{
 		$this->db->select('name,lastName,phone,institution,email,academicGrade,areaInterest
 			,sniLevel,lastFiveArticles,lastFiveResearch,moreInformation,cv,iddiscipline,idspecialism,idsubDiscipline');
 		$this->db->from('user');
 		$this->db->where('iduser',$iduser);
 		$query = $this->db->get();
 		if($query->num_rows() > 0){

 			$userData = $query->result_array();
 			$userData = $userData[0];

 			return $userData;

 		}else{
 			return 0;
 		}
 	}

}

/* End of file account_model.php */
/* Location: ./application/models/account_model.php */