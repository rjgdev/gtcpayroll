<?php 
	class TaxContribution extends CI_Controller 
	{  
		public function __construct()
	    {
	        parent::__construct(); 
	        $this->load->model('TaxContribution_model');
	        $this->load->view('Template/Header');
			$this->load->view('Template/Footer');
	        	
	    }
	public function index() 
		{
			$results = $this->TaxContribution_model->getalldata();	      			
			$data=array('results'=>$results);
			$this->load->view('TaxContribution/index', $data);
		}
	public function newTax()
	{
		$data = array(
					'taxbelowrange' => $this->input->post('taxbelowrange'),
					'taxaboverange' => $this->input->post('taxaboverange'),
					'additionaltax' => $this->input->post('additionaltax'),
					'percent' => $this->input->post('percent')
		);	
		 $this->db->insert('taxwithholding',$data);
		 	 $this->session->set_flashdata('tax', 'success'); 
		 	// echo 'add Loan has successfully been created';
     		 redirect("TaxContribution");	
	}	
	}	 