<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function setUser($data){
		// echo "<pre>";
		// 	print_r($data);
		// echo "</pre>";
		
		$this->db->insert('user', $data);
		// $this->db->select_max('iduser');
		// $consulta=$this->db->get('user');
		// $aux=$consulta->result_array();
		// return ($aux[0]['iduser']);

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
	 		 echo "entre";
		 	// $user = $query->result_array();
		 	// $pass = $user[0]['password'];
		 	// $iduser = $user[0]['iduser'];
		 	// if($accountData['password'] == $pass){
		 	// 	return $iduser;
		 	// }else{
		 	// 	return 0;
		 	// }
	 	}else{
	 		return 0;
	 		// echo "No entré";
	 	}

 	}


}

/* End of file account_model.php */
/* Location: ./application/models/account_model.php */