<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Advanceloan_model extends CI_Model
{

	public function getalldata($id = null)

	{
   if($id == 0) {
        $cond = "";
    }else{
    $cond = "= " .$id;
    }
		 $fullname = $this->db->query('
            SELECT userid, firstname, middlename, lastname FROM user group by userid
        ');
         $loan = $this->db->query("
            SELECT 
            loanid,userid,fullname
            from
            (
                SELECT 
                srln.userid,srln.loanid,
                CONCAT(usrs.firstname,' ', usrs.middlename,' ', usrs.lastname) as fullname
                FROM  userloan as srln 
                LEFT JOIN user as usrs on srln.userid = usrs.userid
            )a
            group by userid
        ");
        $userdata = $this->db->query("
             SELECT 
            loanid,fullname,loantypeid as loantype,termofpaymentID,dategranted,amount,deduction,balance
            FROM
            (
                SELECT
                srln.loanid,
                CONCAT(usrs.firstname,' ', usrs.middlename,' ', usrs.lastname) as fullname,
                case
                WHEN srln.loantypeid = 1 THEN 'Social Security System(SSS)'
                WHEN srln.loantypeid = 2 THEN 'Pag-IBIG'
                WHEN srln.loantypeid = 3 THEN 'Salary'
                WHEN srln.loantypeid = 4 THEN 'Emergency'
                ELSE NULL
                END AS loantypeid,sum(deduction) as deduction,
                case
                WHEN srln.termofpaymentID = 1 THEN 'Monthly'
                WHEN srln.termofpaymentID = 2 THEN 'Payday'
                WHEN srln.termofpaymentID = 3 THEN 'Yearly'
                ELSE NULL
                END AS termofpaymentID,
                date_format(srln.dategranted, '%m/%d/%Y') as dategranted,
                sum(srln.amount) as amount,
                srln.balance
                FROM  userloan as srln 
                LEFT JOIN user as usrs on srln.userid = usrs.userid
                WHERE srln.userid ".$cond."  group by loantypeid
            )a
        ");
                $result3 = $userdata->result();
                $result1 = $fullname->result();
                $result2 = $loan->result();
                return array('user' => $result1, 'loan' => $result2, 'userdetail' => $result3);
	}
    public function addloan($data)
      {
         $this->load->database();      
      }

}