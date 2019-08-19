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
         <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Manage Tax Table</span></li>
    </ol>
</nav>
    <div class="card">
        <div class="card-body test-card">
        <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
          <div class="d-flex align-items-center">
          <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i>Add Records</h6>
          </div>
        <div class="mt-3 mt-md-0">
            <button class="btn btn-primary btn-rounded btn-sm" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-plus-circle-outline"></i>New Tax</button>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="detailed_cashadvance" class="table table-bordered table-striped align">
             <!--<span><?php if($this->session->flashdata('tax')=="success") echo '<script type="text/javascript"> showSuccessToast() </script>';?></span>
              <span><?php if($this->session->flashdata('delete')=="Warning") echo '<script type="text/javascript"> showWarningToast() </script>';?></span>  -->
              <thead>
            <tr>
             <th  style="text-align:center" style="width: 40px ! important;" colspan="4">REVISED WITHHOLDING TAX TABLE</th>
              <tr>
            <tr>
              <th style="text-align:center" style="width: 40px ! important;" colspan="4">Monthly</th>

            </tr>    
         <tr>
            <th style="width: 40px ! important;" rowspan="2">Compensation Level(CL) Range</th>
            <th style="text-align:center" style="width: 40px ! important;" colspan="3">Prescribed Withholding Tax</th>
        </tr>
        <tr>
         
           <th>Additional Tax</th>
           <th>Percent</th>
           <th>Over</th>
        
         </tr> 
       
    </thead>
    <tbody>
        <tr>
         <?php
            foreach ($results['taxwithholding'] as $tax) {

            echo '<tr>';                    
              echo '<td>'.$tax->Range_of_Compensation.'</td>';
               echo '<td  align = "right">'.$tax->additionaltax.'</td>';
              echo '<td  align = "right">'.$tax->percent.'%</td>';
              echo '<td  align = "right">'.$tax->taxbelowrange.'</td>';
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
    <form id="commentForm" method="post" action="<?php echo site_url('TaxContribution/newTax'); ?>">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tax</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <label for="exampleInputPassword1">Below Range</label>
        <input type="text" class="form-control" id="taxbelowrange" name="taxbelowrange" placeholder="Below Range"required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Above Range</label>
        <input type="text" class="form-control" id="taxaboverange" name="taxaboverange" placeholder="above Range"required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Additional Tax</label>
        <input type="text" class="form-control" id="additionaltax" name="additionaltax" placeholder="Additional Tax"required>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Percent</label>
        <input type="text" class="form-control" id="percent" name="percent" placeholder="Percent"required>
        </div>
     
      <div class="modal-footer"> 
        <button type="submit" name="submit"   class="btn btn-primary btn-rounded btn-sm">Save SSS</button>
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
