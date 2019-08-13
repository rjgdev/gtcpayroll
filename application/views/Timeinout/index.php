

<body>
<div class="main-panel">
<div class="content-wrapper">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-custom bg-inverse-primary">
    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-view-dashboard"></i> Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page"><span><i class="mdi mdi-account-multiple-outline"></i> Employee Records Time In & Out</span></li>
    </ol>
</nav>
<!-- DataTable -->
<div class="card">
<div class="card-body test-card">
    <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
        <div class="d-flex align-items-center">
        <h6 class="mb-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline"></i> Employee Records Time In & Out</h6>
        </div>
        <div class="mt-3 mt-md-0">
        <a href="javascript:void(0);"><button type="button" class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#exampleModal" onclick="formToggle('importFrm');"><i class="mdi mdi-file-import
"></i>Import Time in & Out</button></a>
        </div>
    </div>   
<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <?php if(!empty($success_msg)){ ?>
            <div class="col-xs-12">
                <div class="alert alert-success"><?php echo $success_msg; ?></div>
            </div>
            <?php } ?>
            <?php if(!empty($error_msg)){ ?>
            <div class="col-xs-12">
                <div class="alert alert-danger"><?php echo $error_msg; ?></div>
            </div>
            <?php } ?>
            <div class="card">
                 <div class="table-sorter-wrapper col-lg-12 table-responsive">
                    <table id="order-listing" class="table">
                    <thead>
                    <tr>    
                        <th>Date Uploaded</th>
                        <th>Fullname</th>
                        <th>Time IN</th>
                        <th>Time Out</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($members)){ 
                    foreach($members as $row){ ?>
                    <tr>

                        <td><?php echo $row['dateuploaded']; ?></td>
                        <td><?php echo $row['fullname']; ?></td>
                        <td><?php echo $row['timein']; ?></td>
                        <td><?php echo $row['timeout']; ?></td>
                    </tr>
                    <?php } }else{ ?>
                        <tr><td colspan="5">No member(s) found...</td></tr>
                    <?php } ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="commentForm" method="post" enctype="multipart/form-data" action="<?php echo site_url('Timeinout/import'); ?>">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Import time In & Out</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">
          <div class="form-group">
           
            <div class="col-md-12" id="importFrm" style="display: none;">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">


        </div>            
        <div class="modal-footer">
        <!--<button type="submit" class="btn btn-primary" name="submit" value="Save" >Add</button> -->
      
        </div>
        </div>
    </form>
  </div>
</div>
<script>
function formToggle(ID){
var element = document.getElementById(ID);
if(element.style.display === "none"){
element.style.display = "block";
}else{
element.style.display = "none";
}
}
</script>