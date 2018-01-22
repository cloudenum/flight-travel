<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Core_Model');
	}

	public function index()
	{			
		$this->load->view('template/style');
		$this->load->view('template/header');
		$this->load->view('public/v_home');
		$this->load->view('template/footer');
	}

	// public function flightIndex()
	// {
	// 	$this->load->view('flight-index');
	// }

	public function register()
	{	
		$username = $this->input->post('username');
		$fullname = $this->input->post('fullname');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'fullname' => $fullname,
			'password' => $password,
			'level' => 2 
			 );
		$data = $this->Core_Model->register('user', $data);
		redirect(base_url(),'refresh');
	}
}
