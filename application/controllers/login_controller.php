<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('head_view', NULL, FALSE);
		$this->load->view('login_view', NULL, FALSE);
	}

}

/* End of file login_controller.php */
/* Location: ./application/controllers/login_controller.php */