<?php 
	class Dashboard extends CI_Controller 
	{  
 		
		public function index() 
		{ 
			$data = array(
				'title' => 'Dashboard'
			);

			$this->load->view('Template/Header',$data);
			$this->load->view('Dashboard/Index');
			$this->load->view('Template/Footer');
		} 
	} 
?>