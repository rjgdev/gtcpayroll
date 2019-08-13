<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TaxContribution_model extends CI_Model
{
public function getalldata()
{
	  	 $taxTable = $this->db->query("
            SELECT taxID, concat(taxbelowrange,' - ', taxaboverange) as Range_of_Compensation,taxbelowrange,additionaltax,
 			percent from taxwithholding order by taxbelowrange
     ");
  	 $result = $taxTable->result();
  	 return array('taxwithholding' => $result);
}

}