<?php 
   class Employee extends CI_Controller {  

	
		public function index() { 
		$data = array(
				'title' => 'Employee Records'
			);
			$this->load->view('Template/Header',$data);
			$this->load->view('Employee/Index');
			$this->load->view('Template/Footer');

			
		} 

	public function login()
	{
		if($this->session->userdata('userdata')) redirect(base_url());
		$data['title'] = 'Login';
		$this->load->view("login", $data);	
	}
	public function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$this->load->model('employee_model');
			if($this->employee_model->can_login($username, $password))
			{
				$session_data = array(
				'username' => $username,
				'password' => $password
				);
				$this->session->set_userdata('userdata',$session_data);
				redirect(base_url() .'Employee/Index');
			}
			else
			{

				$this->session->set_flashdata('error', 'Invalid Username and password');
				redirect(base_url());
			}
		}
		else
		{

		$this->login();
		}

	}
	 public function logout()
		{
			$this->session->unset_userdata('userdata');
			redirect(base_url());
		}
   } 
?>