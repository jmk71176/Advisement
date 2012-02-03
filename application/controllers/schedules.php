<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Schedules extends CI_Controller {

	public function index()
	{
		$data['title'] = "Schedules";
		$data['active'] = 4;
		
		$this->load->view('header', $data);
		$this->load->view('schedules');
		$this->load->view('footer');
	}
	
}