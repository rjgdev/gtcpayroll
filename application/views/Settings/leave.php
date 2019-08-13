<script>
  $(function () {
    $('.select2').select2();
  });
</script>
<div class="main-panel">
	<div class="content-wrapper">
	    <nav aria-label="breadcrumb">
	      <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
	        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
	        <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Leave</span></li>
	      </ol>
	    </nav>
    
        <div class="card">
      <div class="card-body test-card">
        
          <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center">
              <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i> Set Up Leave</h6>
            </div>
            <div class="mt-3 mt-md-0">
              <button class="btn btn-primary btn-rounded btn-sm" id="add_button" data-toggle="modal" data-target="#setupleaveModal"><i class="mdi mdi-plus-circle-outline"></i> New Leave</button>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <span><?php if($this->session->flashdata('leave')=="success") echo '<script type="text/javascript"> showSuccessToast() </script>';?></span>
                <thead>
                  <tr>
                      <th>Leave ID</th>
                      <th>Type of Leave</th>
                      <th>No. of Days</th>
					            <th>Action</th>
                  </tr>
                </thead>
                <tbody id="showdata">
                  <?php
                        foreach ($records as $r) {

                          echo '<tr>';
                          echo '<td>'.$r->leaveID.'</td>'; 
                          echo '<td>'.$r->typeofleave.'</td>';  
                          echo '<td>'.$r->numberofdays.'</td>'; 
                          echo '<td><button type="button" name="update" id="'.$r->leaveID.'" class="btn btn-outline-primary item-edit" data-target="#setupleaveModal">View</button></td>' ;
                        }
                      ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
	</div>
	</div>
</div>

<div class="modal fade" id="setupleaveModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
    
      <!-- Modal content-->
      <form id="commentForm" method="post" action="<?php echo site_url('Leave/setupleave_action'); ?>">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #f6f7fb;">
          <h3 class="modal-title" id="ModalLabel">Set up Leave</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
          </button>
        </div>
        <fieldset>
        <div class="modal-body">
          <div class="row grid-margin">
          <div class="col-lg-12">

          <div class="form-group">
            <div class="row">
            <div class="col">
              <label for="typeofleave">Type of Leave</label>
              <input id="typeofleave" type="text" name="typeofleave" class="form-control"  required>
            </div>
            <div class="col">
              <label for="numberofdays">Number of days</label>
              <input id="numberofdays" type="text" name="numberofdays" class="form-control" required="">
            </div>
          </div>
    
            <div class="modal-footer">
              <input type="hidden" name="leaveID" id="leaveID" />  
              <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />   
          </div>
          </fieldset>
        </div>
      </form>
    </div>
</div>