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
         <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i>Cash Advance</span></li>
    </ol>
</nav>
    <div class="card">
        <div class="card-body test-card">
        <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
          <div class="d-flex align-items-center">
          <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i>Add Records</h6>
          </div>
        <div class="mt-3 mt-md-0">
            <button class="btn btn-primary btn-rounded btn-sm" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-plus-circle-outline"></i> Cash Advance</button>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="detailed_cashadvance" class="table table-bordered table-striped align">
              <thead>
                <tr>
                  <th style="width: 40px ! important;">User ID</th>
                  <th>Fullname</th> 
                  <th>Amount</th> 
                  <th>Paid</th>                            
                </tr>
              </thead>
             <tbody>
                  <?php 
                  foreach ($results['cashresult'] as $result) 
                  $totalamount[] = $result->amount;
                  $totalpaid[] = $result->paid;
                  {
                    echo '<tr>';                    
                    echo '<td>'.$result->userid.'</td>';
                    echo '<td>'.$result->fullname.'</td>';
                    echo '<td align = "right">'.number_format($result->amount, 2, '.', ',').'</td>';
                    echo '<td align = "right">'.number_format($result->paid, 2, '.', ',').'</td>';
                  }
                  ?>
              </tbody>
              <tfoot>
                <tr>
                   <th>Total</th>
                   <td></td>
                   <td align="right"><?php echo number_format(array_sum($totalamount), 2, '.', ','); ?></td>
                   <td align="right"><?php echo number_format(array_sum($totalpaid), 2, '.', ','); ?></td>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="commentForm" method="post" action="<?php echo site_url('AdvanceLoan/newCashAdvance'); ?>">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cash Advance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group">
            <label>Fullname</label>
            <select class="form-control select2" name="userID" id="userID" style="width: 100%;">
            <?php
            foreach($results['useradvance'] as $user)
            {
              echo '<option value="'.$user->userid.'">'.$user->firstname. ' '.$user->lastname.'</option>';
            }
            ?>
            </select>
            </div> 
        <div class="form-group">
        <label for="exampleInputPassword1">Amount</label>
        <input type="text" class="form-control" id="cashamount" name="cashamount" placeholder="Amount"required>
        </div>
      </div>
      <div class="modal-footer"> 
        <button type="submit" name="submit"   class="btn btn-primary btn-rounded btn-sm">Save changes</button>
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
