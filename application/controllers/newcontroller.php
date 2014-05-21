<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newcontroller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('modelorevista');
	}
	public function index()
	{
		 $this->load->view('ventana1', $data=null, FALSE);
	}

	public function actualizar($idusuario){
		$data["datosusuario"]=$this->modelorevista->tdUsuario($idusuario);
		// echo '<pre>';
		// 	print_r($data);
		// echo '</pre>';
		$this->load->view('ventana_actualizar', $data);
	}

	public function eliminar()
	{
		$data['usuarios']=$this->modelorevista->traerUsuarios();
		$this->load->view('ventana_eliminar', $data);


	}

	public function agregarUsuario()
	{
		$datos=$this->input->post(null, true);
		// echo '<pre>';
		// 	print_r($datos);
		// echo '</pre>';

		$idusuario=$this->modelorevista->agregarUsuario($datos);
		echo $idusuario;
	}

	public function traerUsuarios(){

		$usuarios=$this->modelorevista->traerUsuarios();
		echo '<pre>';
			print_r($usuarios);
		echo '</pre>';

		 // echo solo imprime char  , no imprime arreglos 
	}

	public function eliminarUsuario($idusuario){
		$respuesta=$this->modelorevista->eliminarUsuario($idusuario);
		//echo $respuesta;
		redirect("newcontroller/eliminar");
	}

	public function actualizarUsuario($idusuario){
		$datos=$this->input->post(null, true);
		//$datos = array('username' => "usuarioactual".$idusuario, 'password'=> "passactual");
		$respuesta=$this->modelorevista->actualizarUsuario($idusuario,$datos);
		echo $respuesta;
	}



}

/* End of file newcontroller.php */
/* Location: ./application/controllers/newcontroller.php */