<?php 
   class Employee_Model extends CI_Model {
   
      function __construct() 
      { 
         parent::__construct(); 
      }

      public function add($data)
      {
         $this->load->database();      
      }
   }
?>