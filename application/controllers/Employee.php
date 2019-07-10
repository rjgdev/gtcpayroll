<?php 
   class Employee extends CI_Controller {  
	
		public function index() { 
			// sample change
			// try two
			$data = array(
				'title' => 'Employee Records'
			);
			$this->load->view('Template/Header',$data);
			$query = $this->db->get("user");
			$data ['records'] = $query->result();
			$this->load->view('Employee/Index', $data);
			$this->load->view('Template/Footer');
		} 

		public function newemployee() {
      		$data = array( 
            'firstname' => $this->input->post('firstname'),
            'middlename' => $this->input->post('middlename'),
            'lastname' => $this->input->post('lastname'),
            'address' => $this->input->post('address'),
            'birthdate' => $this->input->post('birthdate'),
            'contactinfo' => $this->input->post('contactinfo'),
            'gender' => $this->input->post('gender'),
            'civilstatus' => $this->input->post('civilstatus'),
            'citizenship' => $this->input->post('citizenship'),
            'hireddate' => $this->input->post('hireddate'),

        );

        	$this->db->insert('user',$data);
        	redirect("Employee");
      }
   } 
?>