<?php 
	class Holiday extends CI_Controller 
	{  
		public function __construct()
	    {
	        parent::__construct(); 
	        $this->load->model('Holiday_model');
	        $this->load->view('Template/Header');
	        $this->load->view('Template/Footer');
	        	
	    }
	public function index() 
		{ 	
			$results = $this->Holiday_model->getalldata();
			$data=array('results'=>$results);
			$this->load->view('Holiday/index', $data);
			
		}
	public function newHoliday()
	{
		$data = array( 
			'dateofholiday' => $this->input->post('dateofholiday'),
			'name' => $this->input->post('Name'),
			'typeofholidayID' => $this->input->post('typeofholidayID')
		);
		 $this->db->insert('holiday',$data);
		 	 $this->session->set_flashdata('holiday', 'success'); 
     		 redirect("Holiday");
	}	

	public function deletedata()
	{
		$id=$this->input->get('id');
		$this->Holiday_model->deleterecords($id);
		 $this->session->set_flashdata('delete', 'Warning'); 
		redirect("Holiday");
	}
	


	}		