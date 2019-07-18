<script>
  $(document).ready(function() {
    $("table#detailed_loan").DataTable({
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
  
<?php 
foreach ($results['userdetail'] as $fullname) 
{
$fullname = $fullname->fullname;

}

?>  
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
         <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Employee Loan</span></li>
    </ol>
</nav>
  <div class="row">
    <div class="col-md-4 grid-margin stretch-card">
           <div class="card">
        <div class="card-body test-card">
        <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
          <div class="d-flex align-items-center">
          <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i>Add Records</h6></br>
          </div>
        <div class="mt-3 mt-md-0">
            <button type="button" class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-flash"></i>Add Loan</button>
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
                foreach ($results['loan'] as $loan) {
                    echo '<tr>';                  
                    echo '<td style="width: 40px ! important;"><a href = '.base_url()."AdvanceLoan/?link_id=".$loan->userid.'>'.$loan->userid.'</a></td>';
                    echo '<td>'.$loan->fullname.'</td>';  
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
          <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-card-details"></i> Loan Records  || <?php echo $fullname; ?></h6>
           
          </div>
      </div>
      <div class="row">
        <div class="col-12">
         <div class="table-sorter-wrapper col-lg-12 table-responsive">
            <table id="detailed_loan" class="table table-bordered table-striped align">
              <thead>
                  <tr>
                     <th>Reference#</th>
                     <!--<th>Full Name</th>  -->
                      <th>Loan Type</th>
                      <th>Term of Payment</th>
                      <th>Date Granted</th>
                      <th>Amount</th>
                       <th>Deduction</th>
                      <th>Balance</th>                                  
                </tr>
              </thead>
              <tbody>
                    <?php 
                    foreach ($results['userdetail'] as $detail) {
                      $totalamount[] = $detail->amount;
                      $totaldeduction[] = $detail->deduction;
                      $totalbalance[] = $detail->balance;
                      
                        echo '<tr>';                    
                        echo '<td  align="left">'.$detail->loanid.'</td>';
                       /* echo '<td align="left">'.$detail->fullname.'</td>';   */
                        echo '<td align="left">'.$detail->loantype.'</td>'; 
                        echo '<td align="left">'.$detail->termofpaymentID.'</td>'; 
                        echo '<td align="left">'.$detail->dategranted.'</td>'; 
                        echo '<td align="right">'.number_format($detail->amount, 2, '.', ',').'</td>';
                        echo '<td align="right">'.number_format($detail->deduction, 2, '.', ',').'</td>';
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
                    <td align="right"><?php echo number_format(array_sum($totalamount), 2, '.', ','); ?></td>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="commentForm" method="post" action="<?php echo site_url('AdvanceLoan/newloan'); ?>">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Loan</h5>
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
            foreach($results['user'] as $group)
            {
            echo '<option value="'.$group->userid.'">'.$group->firstname. ' '.$group->middlename.' '.$group->lastname.'</option>';
            }
            ?>
            </select>
          </div> 
            <div class="col">
              <label for="exampleInputPassword1">Loan Type</label>
              <select class="form-control select2" name="loantypeID" style="width: 100%;">
              <option value="1">Social Security System(SSS)</option>
              <option value="2">Pag-IBIG</option>
              <option value="3">Salary</option>
              <option value="4">Emergency</option>
              </select>
            </div> 
                 <div class="col">
                <label for="birthdate">Date Granted</label>
                <input id="dategranted" type="date" name="dategranted" class="form-control" required>
              </div> 
              <div class="col">
                <label for="exampleInputPassword1">Loan Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount" required>           
          </div>
            <div class="col">
           <label for="exampleInputPassword1">Deduction Amount</label>
          <input type="text" class="form-control" id="deduction" name="deduction" placeholder="Amount" required>
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
</html>



           
            

            