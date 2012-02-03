<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Controller {

	public function index()
	{
		$data['title'] = "Students";
		$data['active'] = 2;
		
		$this->load->view('header', $data);
		$this->load->view('students');
		$this->load->view('footer');
	}
	
}