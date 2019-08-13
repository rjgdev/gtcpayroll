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

	public function getallposition()
		{
			$positionID = $this->db->query('
            SELECT * FROM position 
        ');
			$employee = $this->db->query('
            SELECT * FROM employee 
        ');
			$departmentID = $this->db->query('
            SELECT * FROM department 
        ');

			$result1 = $employee->result();
			$result2 = $positionID->result();
			$result3 = $departmentID->result();
            return array('employee' => $result1, 'positionID' => $result2, 'departmentID' => $result3);
		}
  

  	public function addemployee($data)  
	    {  
	       $this->db->insert('employee', $data);  
	    }

    public function fetch_single_user($employeeID)  
        {  
           $this->db->where("employeeID", $employeeID);  
           $query=$this->db->get('employee');  
           return $query->result();  
        }  
    public function update($employeeID, $data)  
        {  
           $this->db->where("employeeID", $employeeID);  
           $this->db->update("employee", $data);  
      	}    
}
?>

