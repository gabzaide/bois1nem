
<!-- == COURSE UPDATE MODAL  ======== -->
<?php echo '<div id="pendingmodal'.$row['firstname'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> Update Status </h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
            <input type="hidden" value="'.$row['firstname'].'" name="firstname" id="firstname"/>
               <div class="form-group">
                    <label> Status: </label>
                     <select name="status" id="status" class="form-control input-sm" value="'.$row['status'].'" />
                            <option> Pending  </option>
                            <option> Approve </option>
                                
                        </select>
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_pen" value="Update"/>
        </div>
    </div>
  </div>
</form>
</div>';?>