<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Leave'
			);
		$this->load->view('Template/Header', $data);
		$query = $this->db->get("setupleave");
		$data ['records'] = $query->result();
		$this->load->view('Settings/leave', $data);			
		$this->load->view('Template/Footer',  $data);
	}
	
	public function setupleave_action(){  
	           if($_POST["action"] == "Add")  
	           {  
	                $data = array(  
	                    'typeofleave' => $this->input->post('typeofleave'),
				        'numberofdays' => $this->input->post('numberofdays')
	                );  
	                $this->load->model('Leave_model');  
	                $this->Leave_model->addleave($data); 
	                $this->session->set_flashdata('leave', 'success');  
	                redirect("Leave/index");

	           }  
	           if($_POST["action"] == "Edit")  
	           {   
	                $updated_data = array(  
	                    'typeofleave' => $this->input->post('typeofleave'),
				        'numberofdays' => $this->input->post('numberofdays')
	                );  
	                $this->load->model('Leave_model');  
	                $this->Leave_model->update($this->input->post("leaveID"), $updated_data); 
	                $this->session->set_flashdata('leave', 'success'); 
	                redirect("Leave"); 
	           }  
	      }

    public function fetch_single_user()  
      {  
           $output = array();  
           $this->load->model("Leave_model");  
           $data = $this->Leave_model->fetch_single_user($_POST["leaveID"]);  
           foreach($data as $r)  
           {  
                $output['typeofleave'] = $r->typeofleave;
                $output['numberofdays'] = $r->numberofdays;  
           }  
           echo json_encode($output);  
      }    
}
?>