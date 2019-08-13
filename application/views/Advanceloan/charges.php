<script>
  $(document).ready(function() {
    $("table#detailed_charges").DataTable({
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
    $("#date").datepicker({
      changeMonth: true,
      changeYear: true
    });
  
    $("#export_excel").click(function() {
      window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#tabledata').html()));
    });
 
  });
</script>
<?php 
foreach ($results['fulldata'] as $name) {
$fullname = $name->fullname;
}
?>


<div class="main-panel">        
<div class="content-wrapper">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Manage Charges</span></li>
    </ol>
</nav>
  <div class="row">
    <div class="col-md-4 grid-margin stretch-card">
           <div class="card">
        <div class="card-body test-card">
        <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
          <div class="d-flex align-items-center">
          <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i> List of Employee</h6>
          </div>
        <div class="mt-3 mt-md-0">
                      <button class="btn btn-primary btn-rounded btn-sm" type="button" class="btn btn-primary" data-toggle="modal" data-target="#chargesModal"><i class="mdi mdi-plus-circle-outline"></i> Add Charges</button>

        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
               <span class="text-success"><?php echo $this->session->flashdata('item'); ?></span>
              <thead>

                <tr>
                     <th style="width: 40px ! important;">User ID</th>
                      <th>Fullname</th>                             
                </tr>
              </thead>
             <tbody>
                <?php 
                foreach ($results['chargeuser'] as $chargeuser) {
                    echo '<tr>';                  
                    echo '<td style="width: 40px ! important;"><a href = '.base_url()."AdvanceLoan/charges/?charge_id=".$chargeuser->employeeID.'>'.$chargeuser->employeeID.'</a></td>';
                    echo '<td>'.$chargeuser->fullname.'</td>';  
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
    <div class="col-md-8 grid-margin stretch-card">
     <div class="card">
        <div class="card-body test-card">
        <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
          <div class="d-flex align-items-center">
          <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-card-details"></i> Charge Records  || <label class="badge badge-outline-info badge-pill"><?php echo $fullname; ?></label></h6>


          </div>
      </div>
      <div class="row">
        <div class="col-12">
         <div class="table-sorter-wrapper col-lg-12 table-responsive">
            <table id="detailed_charges" class="table table-bordered table-striped align">
              <thead>
                  <tr>
                     <th>Charge#</th>
                      <th>Description</th>
                      <th>Term of Payment</th>
                       <th>Date Granted</th>
                      <th>Charge Amount</th>
                      <th>Charge Deduction</th>
                      <th>Balance</th>                                  
                </tr>
              </thead>

              <tbody>
                       <?php 
                    foreach ($results['fulldata'] as $detail) {
                      $totalchargeamount[] = $detail->chargeamount;
                      $totaldeduction[] = $detail->chargededuction;
                      $totalbalance[] = $detail->balance;
                        //echo json_encode($detail);  
                        echo '<tr>';                    
                        echo '<td>'.$detail->chargeID.'</td>';
                        echo '<td>'.$detail->description.'</td>'; 
                        echo '<td>'.$detail->termofpaymentID.'</td>';
                        echo '<td>'.$detail->dategranted.'</td>';
                        echo '<td align="right">'.number_format($detail->chargeamount, 2, '.', ',').'</td>'; 
                        echo '<td align="right">'.number_format($detail->chargededuction, 2, '.', ',').'</td>'; 
                        echo '<td align="right">'.number_format($detail->balance, 2, '.', ',').'</td>';
                         echo '</tr>';  
                    }
                      ?> 

              </tbody>
              <tfoot>
                <tr>
                    <th>Total</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td align="right"><?php echo number_format(array_sum($totalchargeamount), 2, '.', ','); ?></td>
                    <td align="right"><?php echo number_format(array_sum($totaldeduction), 2, '.', ','); ?></td>
                   <td align="right"><?php echo number_format(array_sum($totalbalance), 2, '.', ','); ?></td>
                </tr>
              </tfoot>
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

<div class="modal fade" id="chargesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="commentForm" method="post" action="<?php echo site_url('AdvanceLoan/newCharges'); ?>">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Charges</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="col">
            <label>Fullname</label>
            <select class="form-control select2" name="userID" id="userID" style="width: 100%;">
              <?php
              foreach($results['userdropdown'] as $user)
              {
              echo '<option value="'.$user->userid.'">'.$user->firstname. ' '.$user->lastname.'</option>';
              }
              ?>
            </select>
          </div> 
            <div class="col">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description" required>
            </div> 
                 <div class="col">
                 <label for="exampleInputPassword1">Charge Amount</label>
                  <input type="text" class="form-control" id="chargeamount" name="chargeamount" placeholder="Charge Amount"required>
              </div> 
              <div class="col">
                <label for="exampleInputPassword1">Deduction Amount</label>
                <input type="text" class="form-control" id="chargededuction" name="chargededuction" placeholder="Amount"required>          
          </div>
            <div class="col">
            <label for="birthdate">Date Granted</label>
            <input id="date" type="date" name="dategranted" class="form-control" value="<?php echo date("m/d/Y", strtotime("-1 days")); ?>"  required>
          </div>
          <div class="col">
             <label for="exampleInputPassword1">Term of Payments</label>
            <select class="form-control select2" name="termofpaymentID" id="termofpaymentID" style="width: 100%;">
            <option value="1">Monthly</option>
            <option value="2">Payday</option>
            <option value="3">Yearly</option>
            </select>
        </div>
        </div>            
        <div class="modal-footer">
        <!--<button type="submit" class="btn btn-primary" name="submit" value="Save" >Add</button> -->
        <button type="submit" class="alert alert-fill-primary" name="submit" id="submit" value="Save">Add</button>
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
 
            

            