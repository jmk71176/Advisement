<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sheets extends CI_Controller {

	public function index()
	{
		$data['title'] = "Distribution Sheets";
		$data['active'] = 3;
		
		$this->load->view('header', $data);
		$this->load->view('sheets');
		$this->load->view('footer');
	}
	
}