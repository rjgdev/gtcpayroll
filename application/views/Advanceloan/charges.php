 <script>
  $(function () {
    $('.select2').select2()
  })
</script>
<div class="main-panel">        
<div class="content-wrapper">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Manage Charges</span></li>
    </ol>
</nav>
  <div class="row">
    <div class="col-md-3 grid-margin stretch-card">
           <div class="card">
        <div class="card-body test-card">
        <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
          <div class="d-flex align-items-center">
          <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i>Add Records</h6>
          </div>
        <div class="mt-3 mt-md-0">
            <button class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#addModal"><i class="mdi mdi-flash"></i> Add Charges</button>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                     <th width="5%">User ID</th>
                      <th class="text-center">Fullname</th>                             
                </tr>
              </thead>
              <tbody>
                           
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
          <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-card-details"></i>Charges Records</h6>
          </div>
      </div>
      <div class="row">
        <div class="col-12">
         <div class="table-sorter-wrapper col-lg-12 table-responsive">
            <table id="sortable-table-2" class="table table-striped">
              <thead>
                  <tr>
                     <th>Reference#</th>
                     <th>Full Name</th>
                      <th>Loan Type</th>
                      <th>Term of Payment</th>
                      <th>date Granted</th>
                      <th>Amount</th>
                       <th>Deduction</th>
                      <th>Balance</th>                                  
                </tr>
              </thead>
              <tbody>
                          
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

    <div class="modal fade" id="addModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <form id="commentForm" method="post" action="<?php echo site_url('AdvanceLoan/newloan'); ?>">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #f6f7fb;">
            <h4 class="modal-title" id="ModalLabel">Loan add</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;
            </button>
            </div>
          <fieldset>  
            <div class="modal-body">
                <div class="row grid-margin">
                  <div class="col-lg-12">
                  <div class="form-group">
                    <label>Fullname</label>
                   
                  </div> 
                  <div class="form-group">
                      <div class="box box-default">
                          <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputPassword1">Loan Type</label>
                              <select class="form-control select2" name="loantypeID" style="width: 100%;">
                              <option value="1">Social Security System(SSS)</option>
                              <option value="2">Pag-IBIG</option>
                              <option value="3">Salary</option>
                              <option value="4">Emergency</option>
                              </select>
                            </div>     
                          </div>               
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="birthdate">Date Granted</label>
                    <input id="dategranted" type="date" name="dategranted" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Loan Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deduction Amount</label>
                    <input type="text" class="form-control" id="deduction" name="deduction" placeholder="Amount">
                  </div>
                    <div class="form-group">
                      <div class="box box-default">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputPassword1">Term of Payments</label>
                            <select class="form-control select2" name="termofpaymentID" id="termofpaymentID" style="width: 100%;">
                            <option value="1">Monthly</option>
                            <option value="2">Payday</option>
                            <option value="3">Yearly</option>
                            </select>
                          </div>     
                        </div>               
                    </div>
                  </div>
                  <div class="form-group">
                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-w85p-container"><span class="select2-selection__rendered" id="select2-w85p-container" title="California"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span>
                  </div>

                  </div>
                </div>            
            <div class="modal-footer">
              <!--<button type="button" class="btn btn-success btn-fw" name="submit" value="Save" onclick="showSuccessToast()">Success</button>-->
             <button type="submit" class="btn btn-primary" name="submit" value="Save" >Add</button> 
            </div>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
</form>
</div>
</div>

 
 </html>

           
            

            