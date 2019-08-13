<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SSS_Contribution_model extends CI_Model
{

  function __construct() 
  { 
     parent::__construct(); 
  }

  public function getalldata()
  {
  	 $SSSTable = $this->db->query("
            SELECT sssid, concat(round(belowrange,2),' - ', aboverange) as Range_of_Compensation,
 			ercontribution,eecontribution, (ercontribution + eecontribution) as total from sssdeduction order by belowrange
     ");
  	 $result = $SSSTable->result();
  	 return array('ssscontribution' => $result);

  }

    function deletesssrecords($id)
  {
  $this->db->query("delete from sssdeduction where sssid ='".$id."'");
  }

  public function update($userID, $data)  
        {  
           $this->db->where("sssid", $userID);  
           $this->db->update("sssdeduction", $data);  
        } 

   public function getData($userID)  
        {  
           $this->db->where("sssid", $leaveID);  
           $query=$this->db->get('sssdeduction');  
           return $query->result();  
        }            
          public function fetch_single_sssdata($sssid)  
        {  
           $this->db->where("sssid", $sssid);  
           $query=$this->db->get('sssdeduction');  
           return $query->result();  
        }  

}  