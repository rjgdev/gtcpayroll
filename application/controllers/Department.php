<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Department'
			);
		$this->load->view('Template/Header', $data);
		$this->load->view('Settings/department', $data);			
		$this->load->view('Template/Footer',  $data);
	}
}
