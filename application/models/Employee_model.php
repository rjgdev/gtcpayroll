<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model
{

  function __construct() 
  { 
     parent::__construct(); 
  }
  
	function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('admin');

		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
  

  	public function addemployee($data)  
	    {  
	       $this->db->insert('user', $data);  
	    }

    public function fetch_single_user($userID)  
        {  
           $this->db->where("userID", $userID);  
           $query=$this->db->get('user');  
           return $query->result();  
        }  
    public function update($userID, $data)  
        {  
           $this->db->where("userID", $userID);  
           $this->db->update("user", $data);  
      	}    
}
?>

