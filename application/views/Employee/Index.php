
 <script>
  $(function () {
    $('.select2').select2()
  })
</script><div class="main-panel">
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
              <button class="btn btn-primary btn-rounded btn-sm" id="add_button" data-toggle="modal" data-target="#addModal"><i class="mdi mdi-account-plus "></i> New Employee</button>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>User</th>
                      <th>Contact No.</th>
                      <th>Hired Date</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody id="showdata">
                  <?php
                        foreach ($results['user'] as $r) {

                          echo '<tr>';
                          echo '<td class="py-1 user-circle">
                            <img src="assets/images/faces/profileimg.png" alt="image"/>'.' '.$r->firstname.' '.$r->lastname.'</td>';
                          echo '<td>'.$r->contactinfo.'</td>'; 
                          echo '<td>'.$r->hireddate.'</td>';  
                          echo '<td><label class="badge badge-info">Active</label>'.$r->status.'</td>'; 
                          echo '<td><button type="button" name="update" id="'.$r->userID.'" class="btn btn-outline-primary item-edit" data-target="#addModal">View</button></td>' ;
                        }
                      ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

          <div class="modal fade" id="addModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
            
              <!-- Modal content-->
              <form id="commentForm" method="post" action="<?php echo site_url('Employee/employee_action'); ?>">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #f6f7fb;">
                  <h3 class="modal-title" id="ModalLabel">New Employee</h3>
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
                      <div class="form-check form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" id="s2" name="s2[]">
                          Active
                        </label>
                      </div>
                    </div>                      
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col">
                      <label for="firstname">First Name</label>
                      <input id="firstname" type="text" name="firstname" class="form-control"  required>
                    </div>
                    <div class="col">
                      <label for="middlename">Middle Name</label>
                      <input id="middlename" type="text" name="middlename" class="form-control">
                    </div>
                    <div class="col">
                      <label for="lastname">Last Name</label>
                      <input id="lastname" type="text" name="lastname" class="form-control" required>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col">
                      <label for="address">Address</label>
                      <input id="address" type="text" name="address" class="form-control"  required>
                    </div>
                    <div class="col">
                      <label for="birthdate">Birthdate</label>
                      <input id="birthdate" type="date" name="birthdate" class="form-control" required>
                    </div>
                    <div class="col">
                      <label for="contactinfo">Contact No.</label>
                      <input id="contactinfo" type="text" name="contactinfo" class="form-control" required>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col">
                      <label for="gender">Gender</label>
                      <select class="form-control" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="civilstatus">Civil Status</label>
                      <select class="form-control" name="civilstatus">
                        <option>Single</option>
                        <option>Married</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="citizenship">Citizenship</label>
                      <input id="citizenship" type="text" name="citizenship" class="form-control" required>
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col">
                      <label for="hireddate">Hired Date</label>
                      <input id="hireddate" type="date" name="hireddate" class="form-control"  required>
                    </div>
                    <div class="col">
                      <label for="gender">Department</label>
                      <select class="form-control" name="departmentID">
                        <?php
                        foreach($results['departmentID'] as $department)
                        {
                        echo '<option value="'.$department->departmentID.'">'.$department->description.'</option>';
                        }
                        ?>  
                      </select>
                    </div>
                    <div class="col">
                      <label for="gender">Position</label>
                      <select class="form-control" name="positionID">
                        <?php
                        foreach($results['positionID'] as $position)
                        {
                        echo '<option value="'.$position->positionID.'">'.$position->description.'</option>';
                        }
                        ?>
                      </select>
                    </div>
                    </div>
                  </div>
            
                    <div class="modal-footer">
                      <input type="hidden" name="userID" id="userID" />  
                      <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />   
                  </div>
                  </fieldset>
                </div>
                  </form>
                </div>
              </div>
              