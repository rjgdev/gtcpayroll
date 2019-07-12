<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Advanceloan_model extends CI_Model
{

	public function getalldata()

	{
		 $fullname = $this->db->query('SELECT userid, firstname, middlename, lastname FROM user');
         $loan = $this->db->query("
            select 
            loanid,fullname,loantypeid as loantype,termofpaymentID,dategranted,amount,balance
            from
            (
                select 
                srln.loanid,
                CONCAT(usrs.firstname,' ', usrs.middlename,' ', usrs.lastname) as fullname,
                case
                WHEN srln.loantypeid = 1 THEN 'Social Security System(SSS)'
                WHEN srln.loantypeid = 2 THEN 'Pag-IBIG'
                WHEN srln.loantypeid = 3 THEN 'Salary'
                WHEN srln.loantypeid = 4 THEN 'Emergency'
                ELSE NULL
                END AS loantypeid,
                case
                WHEN srln.termofpaymentID = 1 THEN 'Monthly'
                WHEN srln.termofpaymentID = 2 THEN 'Payday'
                WHEN srln.termofpaymentID = 3 THEN 'Yearly'
                ELSE NULL
                END AS termofpaymentID,
                srln.dategranted,
                srln.amount,
                srln.balance
                from  userloan as srln
                left join user as usrs on srln.userid = usrs.userid
            )a
        ");
                $result1 = $fullname->result();
                $result2 = $loan->result();
                return array('user' => $result1, 'loan' => $result2);
	}

    public function addloan($data)
      {
         $this->load->database();      
      }

}