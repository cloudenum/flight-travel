<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()

	{	$data['js_to_load']= array('js/search-page.js');
		$this->load->view('template/style');
		$this->load->view('template/header');
		$this->load->view('public/v_search_result');
		$this->load->view('template/footer', $data);
	}

	// public function flightIndex()
	// {
	// 	$this->load->view('flight-index');
	// }
}
