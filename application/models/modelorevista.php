<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelorevista extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function agregarUsuario($datos)
	{
		//$arrayDatos = array('username' =>$usr ,'password'=> $pass ); // arreglo asociativo
		$this->db->insert('usuarios', $datos); //insert solo necesita  valor 
		$this->db->select_max('idusuarios');
		$consulta=$this->db->get('usuarios');
		$aux=$consulta->result_array();
		return ($aux[0]['idusuarios']);



	}

	public function traerUsuarios(){

		$this->db->select('*');
		$this->db->from('usuarios');
		$query=$this->db->get();
		// echo "<pre>";
		// 	// print_r($query->result_array()); 
		// 	print_r($query);
		// echo "</pre>";
		if ($query->num_rows()>0) {
			foreach ($query->result_array() as $usuario) {
				$usuarios[$usuario['idusuarios']]=$usuario;
				
				// echo"<pre>";
				// 	print_r($usuarios);
				// echo"</pre>";
			}
			return $usuarios;
		}
		else{return 0;}
	}

	public function eliminarUsuario($idusuario){
		if ($this->db->delete('usuarios', array('idusuarios' =>$idusuario))){
			return 1;
		}else{return 0;}


	}

	public function actualizarUsuario($idusuario,$datos){
		$this->db->where('idusuarios',$idusuario);
		if($this->db->update('usuarios',$datos)){
			return 1;
		}else{return 0;}
	}

	public function tdUsuario($idusuario){
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('idusuarios',$idusuario);
		$id=$this->db->get();
			if($id->num_rows()>0){
				$id=$id->result_array();
				return $id[0];

			}else{return 0;}

	}
	

}

/* End of file modelorevista.php */
/* Location: ./application/models/modelorevista.php */