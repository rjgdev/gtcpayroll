<script>
  $(document).ready(function() {
    $("table#detailed_cashadvance").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      //"lengthMenu": [[-1, 300, 600, 900], ["All", 300, 600, 900]],
      //"pagingType": "full",
      //"lengthMenu": [[-1, 300, 600, 900], ["All", 300, 600, 900]],
      //"pagingType": "full",
      //"dom": '<"pull-left"f><"pull-right"l>tip',
      dom: 'Bfrtip',
      buttons: [
        'csvHtml5'
      ]
    });
  
    $("#export_excel").click(function() {
      window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#tabledata').html()));
    });
  });
</script>
<div class="main-panel">        
<div class="content-wrapper">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Manage SSS Table</span></li>
    </ol>
</nav>
    <div class="card">
        <div class="card-body test-card">
        <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
          <div class="d-flex align-items-center">
          <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i>Add Records</h6>
          </div>
        <div class="mt-3 mt-md-0">
            <button class="btn btn-primary btn-rounded btn-sm" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-plus-circle-outline"></i>New SSS</button>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="detailed_cashadvance" class="table table-bordered table-striped align">
             <!--<span><?php if($this->session->flashdata('holiday')=="success") echo '<script type="text/javascript"> showSuccessToast() </script>';?></span>
              <span><?php if($this->session->flashdata('delete')=="Warning") echo '<script type="text/javascript"> showWarningToast() </script>';?></span>  -->
              <thead>
        <tr>
            <th  style="text-align:center" style="width: 40px ! important;" colspan="7"><h3>Here is the New SSS Contributions Table for Employed SSS Members</h3></th>
        </tr>
        <tr>
            <th  style="width: 40px ! important;" rowspan="2">Range of Compensation</th>
            <th  style="text-align:center" style="width: 40px ! important;" colspan="3">SS Contribution</th>
            <th style="width: 40px ! important;" rowspan="2">Function</th>
        </tr>
        <tr>
            <th>ER</th>
            <th>EE</th>
             <th>Total</th>
             <th></th>
            

          
        </tr>
    </thead>
    <tbody>
        <tr>
          <?php
            foreach ($results['ssscontribution'] as $r) {

            echo '<tr>';                    
              echo '<td>'.$r->Range_of_Compensation.'</td>';
              echo '<td align = "right">'.$r->ercontribution.'</td>';
              echo '<td align = "right">'.$r->eecontribution.'</td>';
              echo '<td align = "right">'.$r->total.'</td>';
              echo "<td><a href='SSS_Contribution/deletedata?id=".$r->sssid."'> Delete</a></td>";
              echo '<td><button type="button" name="update" id="'.$r->sssid.'" class="btn btn-outline-primary" data-target="#addModal">View</button></td>' ;   
              echo '</tr>';    
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
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="commentForm" method="post" action="<?php echo site_url('SSS_Contribution/newContribution'); ?>">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SSS Contribution</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <label for="exampleInputPassword1">Below Range</label>
        <input type="text" class="form-control" id="belowrange" name="belowrange" placeholder="Below Range"required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Above Range</label>
        <input type="text" class="form-control" id="aboverange" name="aboverange" placeholder="above Range"required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Employer</label>
        <input type="text" class="form-control" id="ercontribution" name="ercontribution" placeholder="Employer Contribution"required>
        </div>
          <div class="form-group">
        <label for="exampleInputPassword1">Employee</label>
        <input type="text" class="form-control" id="eecontribution" name="eecontribution" placeholder="Employee's Contribution"required>
        </div>
      <div class="modal-footer"> 
        <button type="submit" name="action" id="action" class="btn btn-primary btn-rounded btn-sm">Add SSS</button>
      </div>
    </div>
     </form>
  </div>
</div>
 <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>
