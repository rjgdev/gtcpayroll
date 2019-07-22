<?php 
   class Employee extends CI_Controller {  
     
		public function index() 
		{ 
		  $data = array(
				'title' => 'Employee Records'
			);
			//$this->load->view('Template/Header',$data);
			$this->load->model('Employee_model');
  			$results = $this->Employee_model->getallposition();
  			/*$results = $this->Employee_model->getalldepartment();*/
  			$data=array('results'=>$results);
			//$data ['records'] = $query->result();
			$this->load->view('Template/Header', $data);
			$this->load->view('Employee/index', $data);
			$this->load->view('Template/Footer',  $data);
			//$this->load->view('Employee/index', $data);
			//$this->load->view('Template/Footer');
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
					redirect(base_url() .'Employee');
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


	    public function employee_action(){  
	           if($_POST["action"] == "Add")  
	           {  
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
				        'departmentID' => $this->input->post('departmentID'),
				        'positionID' => $this->input->post('positionID') 
	                );  
	                $this->load->model('Employee_model');  
	                $this->Employee_model->addemployee($data); 
	                $this->session->set_flashdata('employee', 'success'); 
	                redirect("Employee");

	           }  
	           if($_POST["action"] == "Edit")  
	           {   
	                $updated_data = array(  
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
				        'departmentID' => $this->input->post('departmentID'),
				        'positionID' => $this->input->post('positionID') 
	                );  
	                $this->load->model('Employee_model');  
	                $this->Employee_model->update($this->input->post("userID"), $updated_data); 
	                $this->session->set_flashdata('employee', 'success'); 
	                redirect("Employee"); 
	           }  
	      }

	    public function fetch_single_user()  
	      {  
	           $output = array();  
	           $this->load->model("Employee_model");  
	           $data = $this->Employee_model->fetch_single_user($_POST["userID"]);  
	           foreach($data as $r)  
	           {  
	                $output['firstname'] = $r->firstname;
	                $output['middlename'] = $r->middlename;  
	                $output['lastname'] = $r->lastname; 
	                $output['address'] = $r->address;
	                $output['birthdate'] = $r->birthdate;
	                $output['contactinfo'] = $r->contactinfo;
	                $output['gender'] = $r->gender;
	                $output['civilstatus'] = $r->civilstatus; 
	                $output['citizenship'] = $r->citizenship;
	                $output['hireddate'] = $r->hireddate;
	                $output['departmentID'] = $r->departmentID;
	                $output['positionID'] = $r->positionID;
	           }  
	           echo json_encode($output);  
	      }
	      }     
?>
