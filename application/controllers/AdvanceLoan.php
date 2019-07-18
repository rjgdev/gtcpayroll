<?php 
	class AdvanceLoan extends CI_Controller 
	{  
		public function __construct()
	    {
	        parent::__construct(); 
	        	
	    }
	public function index() 
		{ 
		$data = array(
				'title' => 'Loan Form'
			);
			$id = $this->input->get('link_id');
		 	$this->load->model('Advanceloan_model');
  			$results = $this->Advanceloan_model->getalldata($id);	      			
			$data=array('results'=>$results);
			//echo json_encode($data);		
			$this->load->view('Template/Header', $data);
			$this->load->view('Template/Footer',  $data);
			$this->load->view('Advanceloan/index', $data);
			}	
	public function newloan()
	    {
		$data = array( 
			'userID' => $this->input->post('userID'),
			'loantypeID' => $this->input->post('loantypeID'),
			'dategranted' => $this->input->post('dategranted'),
			'deduction' => $this->input->post('dategranted'),
			'termofpaymentID' => $this->input->post('termofpaymentID'),
			'amount' => $this->input->post('amount')
		);	
		 	 $this->db->insert('userloan',$data);
<<<<<<< HEAD
		 	 echo 'order has successfully been created';
=======
		 	 $this->session->set_flashdata('item', 'add Loan has successfully been created');
		 	// echo 'add Loan has successfully been created';
>>>>>>> parent of fc89db8... Manage Leave
     		 redirect("AdvanceLoan");

	    }
<<<<<<< HEAD
=======
	public function charges()
	{
			$this->load->view('Template/Header');
			$this->load->view('Template/Footer');
			$this->load->view('Advanceloan/charges');
	}
>>>>>>> parent of fc89db8... Manage Leave

	}

      		