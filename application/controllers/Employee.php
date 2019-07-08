<?php 
   class Employee extends CI_Controller {  
	
		public function index() { 
			// sample change
			// try two
			$data = array(
				'title' => 'Employee Records'
			);
			$this->load->view('Template/Header',$data);
			$this->load->view('Employee/Index');
			$this->load->view('Template/Footer');
		} 
   } 
?>