<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Position'
			);
		$this->load->view('Template/Header', $data);
		$this->load->view('Settings/position', $data);			
		$this->load->view('Template/Footer',  $data);
	}
}