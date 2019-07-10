<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model
{

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

}