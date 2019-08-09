<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Holiday_model extends CI_Model
{

	public function getalldata()

	{
		 $holiday = $this->db->query("
			SELECT 	
				holidayID,
				DAYNAME(dateofholiday) AS weekday,
				DATE_FORMAT(dateofholiday, '%d %M% %Y') as date_of_holiday,
				Name,
				CASE
				WHEN typeofholidayID = 1 THEN 'Regular Holidays'
				WHEN typeofholidayID = 2 THEN 'Special Non-working Holidays'
				ELSE NULL
				END AS typeofholidayID
				from holiday
        	");
		 $holidayresult = $holiday->result();
		 return array('holiday' => $holidayresult);
	}
	function deleterecords($id)
	{
	$this->db->query("delete  from holiday where holidayID='".$id."'");
	}

}		