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
			$this->load->view('Advanceloan/index', $data);
			$this->load->view('Template/Footer',  $data);
			
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
		 	 $this->session->set_flashdata('item', 'add Loan has successfully been created');
		 	// echo 'add Loan has successfully been created';
     		 redirect("AdvanceLoan");
	    }
	public function charges()
	{
			$id = $this->input->get('charge_id');
			echo $id;
		    $this->load->model('Advanceloan_model');
  			$results = $this->Advanceloan_model->getalldatacharge($id);	
  			$data = array('results'=>$results);
  			//print_r($data);
			$this->load->view('Template/Header', $data);
			$this->load->view('Advanceloan/charges', $data);
			$this->load->view('Template/Footer', $data);
			
	}

	public function newCharges()
	    {
		$data = array(
			'userID' => $this->input->post('userID'),
			'description' => $this->input->post('description'),
			'chargeamount' => $this->input->post('chargeamount'),
			'chargededuction' => $this->input->post('chargededuction'),
			'dategranted' => $this->input->post('dategranted'),
			'termofpaymentID' => $this->input->post('termofpaymentID')
			
		);	
		 	 $this->db->insert('charge',$data);
		 	 $this->session->set_flashdata('item', 'Charges has successfully been created');
		 	// echo 'add Loan has successfully been created';
     		 redirect("AdvanceLoan/charges");
	    }

	    public function cashadvance()
	    {
	    	$this->load->model('Advanceloan_model');
  			$results = $this->Advanceloan_model->getcashadvance();	
  			$data = array('results'=>$results); 
  			//echo json_decode($data);
	    	$this->load->view('Template/Header',$data);
			$this->load->view('Advanceloan/cashadvance', $data);
			$this->load->view('Template/Footer', $data);
	    }

	    public function newCashAdvance()

	    {
	    	$data = array(
			'userID' => $this->input->post('userID'),
			'amount' => $this->input->post('cashamount'),
		);
	    	$this->db->insert('cashadvance',$data);
		 	 //$this->session->set_flashdata('item', 'Charges has successfully been created');
		 	  redirect("AdvanceLoan/cashadvance");
	    }

	}

      		