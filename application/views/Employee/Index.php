<div class="main-panel">
  <div class="content-wrapper">
    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Employee Records</span></li>
                      </ol>
                    </nav>
    <!-- DataTable -->
    <div class="card">
      <div class="card-body test-card">
        
          <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
            <div class="d-flex align-items-center">
              <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i> Employee Records</h6>
            </div>
            <div class="mt-3 mt-md-0">
              <button class="btn btn-sm text-muted border-0 dropdown-toggle px-0" type="button" id="dropdownMenuSizeButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Filter by </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton2">
                <h6 class="dropdown-header">Filter by</h6>
                <a class="dropdown-item" href="#">All</a>
                <a class="dropdown-item" href="#">Active</a>
                <a class="dropdown-item" href="#">Inactive</a>
              </div>
              <button class="btn btn-primary btn-rounded btn-sm"><i class="mdi mdi-account-plus "></i> New Employee</button>
            </div>
      </div>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>Order #</th>
                      <th>Purchased On</th>
                      <th>Customer</th>
                      <th>Ship to</th>
                      <th>Base Price</th>
                      <th>Purchased Price</th>
                      <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>1</td>
                      <td>2012/08/03</td>
                      <td>Edinburgh</td>
                      <td>New York</td>
                      <td>$1500</td>
                      <td>$3200</td>
                      <td>
                        <label class="badge badge-info">On hold</label>
                      </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>