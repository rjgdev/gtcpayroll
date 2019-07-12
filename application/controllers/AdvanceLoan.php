<?php 
	class AdvanceLoan extends CI_Controller 
	{  
		public function __construct()
	    {
	        parent::__construct(); 

	        	
	    }
	public function index( ) 
			{ 
				$data = array(
						'title' => 'Loan Form'
					);
				 	$this->load->model('Advanceloan_model');
	      			$results = $this->Advanceloan_model->getalldata();
	      			
					$data=array('results'=>$results);
					//var_dump($data);
			
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
			'termofpaymentID' => $this->input->post('termofpaymentID'),
			'amount' => $this->input->post('amount')
		);	
		 	 $this->db->insert('userloan',$data);
     		 redirect("AdvanceLoan");

	    }
	}

      		