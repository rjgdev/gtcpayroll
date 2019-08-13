<?php 
	class SSS_Contribution extends CI_Controller 
	{  
		public function __construct()
	    {
	        parent::__construct(); 

	        $this->load->model('SSS_Contribution_model');
	        $this->load->view('Template/Header');
			$this->load->view('Template/Footer');
	        	
	    }
	public function index() 
		{ 
			 $this->load->model('SSS_Contribution_model');
			$results = $this->SSS_Contribution_model->getalldata();	      			
			$data=array('results'=>$results);
			$this->load->view('SSS_Contribution/index',$data);
		}

	public function newContribution()
		{
	  if($_POST["action"] == "Add")  
       {  
		$data = array(
					'belowrange' => $this->input->post('belowrange'),
					'aboverange' => $this->input->post('aboverange'),
					'ercontribution' => $this->input->post('ercontribution'),
					'eecontribution' => $this->input->post('eecontribution')
		);	
		 $this->db->insert('sssdeduction',$data);
		 	 $this->session->set_flashdata('item', 'SSS has successfully been created');
     		 redirect("SSS_Contribution");		
		}
		if($_POST["action"] == "update") 
		{

		$dataupdated = array(
			'belowrange' => $this->input->post('belowrange'),
			'aboverange' => $this->input->post('aboverange'),
			'ercontribution' => $this->input->post('ercontribution'),
			'eecontribution' => $this->input->post('eecontribution')
			);  	         
            $this->SSS_Contribution_model->update($this->input->post("sssid"), $dataupdated); 
            $this->session->set_flashdata('sss', 'success'); 
            redirect("SSS_Contribution"); 
		}	


	}	
	public function deletedata()
	{
		$this->load->model('SSS_Contribution_model');
		$id = $this->input->get('id');
		$this->SSS_Contribution_model->deletesssrecords($id);
		$this->session->set_flashdata('delete', 'Warning'); 
		redirect("SSS_Contribution");
	}	

	public function editContribution()
	{
		$dataupdated = array(
			'belowrange' => $this->input->post('belowrange'),
			'aboverange' => $this->input->post('aboverange'),
			'ercontribution' => $this->input->post('ercontribution'),
			'eecontribution' => $this->input->post('eecontribution')
			);  	         
            $this->SSS_Contribution_model->update($this->input->post("sssid"), $dataupdated); 
            $this->session->set_flashdata('sss', 'success'); 
            redirect("SSS_Contribution"); 
	}

	  public function fetch_single_sss()  
	      {  
	           $output = array();  
	           $this->load->model("SSS_Contribution_model");  
	           $data = $this->SSS_Contribution_model->fetch_single_sssdata($_POST["sssid"]);  
	           foreach($data as $r)  
	           {  
	                $output['belowrange'] = $r->belowrange;
	                $output['aboverange'] = $r->aboverange;  
	                $output['ercontribution'] = $r->ercontribution; 
	                $output['eecontribution'] = $r->eecontribution;
	              
	           }  
	           echo json_encode($output);  
	      }

	}		