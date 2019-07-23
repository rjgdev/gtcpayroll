<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leave_model extends CI_Model
{

  function __construct() 
  { 
     parent::__construct(); 
  }

  	public function addleave($data)  
	    {  
	       $this->db->insert('setupleave', $data);  
	    }

    public function fetch_single_user($userID)  
        {  
           $this->db->where("leaveID", $leaveID);  
           $query=$this->db->get('setupleave');  
           return $query->result();  
        }  
    public function update($leaveID, $data)  
        {  
           $this->db->where("leaveID", $leaveID);  
           $this->db->update("setupleave", $data);  
      	}    
}
?>
