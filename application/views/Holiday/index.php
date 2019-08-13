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
        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i>Holiday Records</span></li>
    </ol>
</nav>
    <div class="card">
        <div class="card-body test-card">
        <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
          <div class="d-flex align-items-center">
          <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i>Add Records</h6>
          </div>
        <div class="mt-3 mt-md-0">
            <button class="btn btn-primary btn-rounded btn-sm" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-plus-circle-outline"></i> Holiday Records</button>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="detailed_cashadvance" class="table table-bordered table-striped align">
              <span><?php if($this->session->flashdata('holiday')=="success") echo '<script type="text/javascript"> showSuccessToast() </script>';?></span>
              <span><?php if($this->session->flashdata('delete')=="Warning") echo '<script type="text/javascript"> showWarningToast() </script>';?></span>
              <thead>
                <tr>
                  <th style="width: 40px ! important;">Date</th>
                  <th></th> 
                  <th>Name</th> 
                  <th>Type of Holiday's</th>
                  <th>Function</th>    
             <tbody>
                <?php 
                  foreach ($results['holiday'] as $result) 
                 
                  {
                    echo '<tr>';                    
                    echo '<td>'.$result->date_of_holiday.'</td>';
                    echo '<td>'.$result->weekday.'</td>';
                    echo '<td>'.$result->Name.'</td>';
                    echo '<td>'.$result->typeofholidayID.'</td>';
                     echo "<td><a href='Holiday/deletedata?id=".$result->holidayID."'>Delete</a></td>";
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
    <form id="commentForm" method="post" action="<?php echo site_url('Holiday/newHoliday'); ?>">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Holiday</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group">
            <label for="birthdate">Date</label>
            <input id="date" type="date" name="dateofholiday" class="form-control" value="<?php echo date("m/d/Y", strtotime("-1 days")); ?>"  required>
            </div> 
        <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" id="Name" name="Name" placeholder="Name"required>
        </div>
         <label for="exampleInputPassword1">Type of Holiday</label>
            <select class="form-control select2" name="typeofholidayID" id="typeofholidayID" style="width: 100%;">
            <option value="1">Regular Holidays</option>
            <option value="2">Special Non-working Holidays</option>
            </select>
      <div class="modal-footer"> 
        <button type="submit" name="submit"   class="btn btn-primary btn-rounded btn-sm">Save Holiday</button>
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
