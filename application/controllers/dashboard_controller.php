<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('head_view', NULL, FALSE);
		$this->load->view('dashboard_view', NULL, FALSE);
	}

	public function getProfile() 
	{
		$this->load->view('head_view', NULL, FALSE);
		$this->load->view('profile_view', NULL, FALSE);
	}
}

/* End of file dashboard_controller.php */
/* Location: ./application/controllers/dashboard_controller.php */