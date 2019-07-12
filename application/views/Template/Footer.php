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
</body>
<script  type="text/javascript">  
                     $(document).ready(function(){  
                      /*$('#add_button').click(function(){  
                             $('#commentForm')[0].reset();  
                             $('.modal-title').text("Add User");  
                             $('#action').val("Add");   
                        });*/

                      $('.modal').on("hidden.bs.modal", function() {
                        $(this).find('form').trigger('reset');
                        $('.modal-title').text("New Employee");  
                         $('#userID').val("");  
                         $('#action').val("Save");  
                      });

                      $('.item-edit').unbind('click').bind('click', function(){  
                                  
                           var userID = $(this).attr("id");  
                         $.ajax({  
                              url:"<?php echo base_url(); ?>Employee/fetch_single_user",  
                              method:"POST",  
                              data:{userID:userID},  
                              dataType:"json",  
                              success:function(data)  
                              {  
                                   $('#addModal').modal('show');  
                                   $('#firstname').val(data.firstname);
                                   $('#middlename').val(data.middlename); 
                                   $('#lastname').val(data.lastname);  
                                   $('.modal-title').text("Edit User");  
                                   $('#userID').val(userID);  
                                   $('#action').val("Edit");  
                              }  
                         })  
                    });
                    </script>
</html>