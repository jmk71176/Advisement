<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['active'] = 1;
		
		$this->load->view('header', $data);
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
	
}