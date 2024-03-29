  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/template.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/todolist.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/data-table.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/modal-demo.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/form-validation.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bt-maxLength.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/select2/select2.full.min.js"></script>


</body>
  <script  type="text/javascript">  
    $(document).ready(function(){
      

      $('.modal').on("hidden.bs.modal", function() {
        $(this).find('form').trigger('reset');
        $('.modal-title').text("New Employee");  
         $('#employeeID').val("");  
         $('#action').val("Save");  
      });

      $('.employee-edit').unbind('click').bind('click', function(){  
                  
           var employeeID = $(this).attr("id");  
         $.ajax({  
              url:"<?php echo base_url(); ?>Employee/fetch_single_user",  
              method:"POST",  
              data:{employeeID:employeeID},  
              dataType:"json",  
              success:function(data)  
              {  
                   $('#addModal').modal('show');
                   $('#status').val(data.status);  
                   $('#firstname').val(data.firstname);
                   $('#middlename').val(data.middlename); 
                   $('#lastname').val(data.lastname);
                   $('#gender').val(data.gender); 
                   $('#housenumber').val(data.housenumber);
                   $('#streetname').val(data.streetname);
                   $('#barangay').val(data.barangay);
                   $('#city').val(data.city);  
                   $('#birthdate').val(data.birthdate);  
                   $('#contactinfo').val(data.contactinfo);   
                   $('#civilstatus').val(data.civilstatus);
                   $('#citizenship').val(data.citizenship);
                   $('#hireddate').val(data.hireddate);
                   $('#departmentID').val(data.departmentID);
                   $('#positionID').val(data.positionID);
                   $('#basicsalary').val(data.basicsalary);
                   $('#dailyrate').val(data.dailyrate);
                   $('#allowance').val(data.allowance);
                   $('#tinnumber').val(data.tinnumber);
                   $('#sssnumber').val(data.sssnumber);
                   $('#philhealthnumber').val(data.philhealthnumber);
                   $('#pagibignumber').val(data.pagibignumber);   
                   $('.modal-title').text("Update employee");  
                   $('#employeeID').val(employeeID);  
                   $('#action').val("Update");  
              }  
         })  
      });

      $('.leave-edit').unbind('click').bind('click', function(){  
                  
           var leaveID = $(this).attr("id");  
         $.ajax({  
              url:"<?php echo base_url(); ?>Employee/fetch_single_user",  
              method:"POST",  
              data:{leaveID:leaveID},  
              dataType:"json",  
              success:function(data)  
              {  
                   $('#setupleaveModal').modal('show');
                   $('#typeofleave').val(data.typeofleave);  
                   $('#numberofdays').val(data.numberofdays);   
                   $('.modal-title').text("Update Leave");  
                   $('#leaveID').val(leaveID);  
                   $('#action').val("Update");  
              }  
         })  
      });

    });  
  </script> 
</html>

