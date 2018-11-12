
<!-- == COURSE UPDATE MODAL  ======== -->
<?php echo '<div id="updateadminprofiling'.$row['firstname'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> Update Admin Profiling </h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['adminid'].'" name="adminid" id="adminid"/>
                <div class="form-group"> 
                    <label> Enter Updated First Name: </label>
                    <input name="firstname" id="firstname" class="form-control input-sm" type="text" value="'.$row['firstname'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Middle Name: </label>
                    <input name="middlename" id="middlename" class="form-control input-sm" type="text" value="'.$row['middlename'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Family Name: </label>
                    <input name="familyname" id="familyname" class="form-control input-sm" type="text" value="'.$row['familyname'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Email Address: </label>
                    <input name="emailaddress" id="emailaddress" class="form-control input-sm" type="email" value="'.$row['emailaddress'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Username: </label>
                    <input name="username" id="username" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Password: </label>
                    <input name="password" id="password" class="form-control input-sm" type="password" value="'.$row['password'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Status: </label>
                    <input name="status" id="status" class="form-control input-sm" type="text" value="'.$row['status'].'" />
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="update_admin_profiling" value="Update Admin Profiling"/>
        </div>
    </div>
  </div>
</form>
</div>';?>



