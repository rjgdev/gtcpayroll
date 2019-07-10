<?php 
   class Employee extends CI_Controller {  
     
		public function index() { 
		  $data = array(
				'title' => 'Employee Records'
			);
			$this->load->view('Template/Header',$data);
			$query = $this->db->get("user");
			$data ['records'] = $query->result();
			$this->load->view('Employee/Index', $data);
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
        'hireddate' => $this->input->post('hireddate')
    );
      $this->db->insert('user',$data);
      redirect("Employee");
  }
} 
?>