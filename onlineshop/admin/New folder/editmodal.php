
<!-- ========= YEARLEVEL MODAL ======== -->
<?php echo '<div id="editModal'.$row['courseid'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Apartment Unit</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['courseid'].'" name="courseid" id="courseid"/>
                <div class="form-group">
                    <label>Edit Course Number: </label>
                    <input name="coursenumber" id="coursenumber" class="form-control input-sm" type="text" value="'.$row['coursenumber'].'" />
                </div>
                <div class="form-group">
                    <label>Edit Course Name: </label>
                     <select name="coursename" id="coursename" class="form-control input-sm" value="'.$row['coursename'].'" />
                     <option>Agriculture</option>
                     <option>Automotive</option>
                     <option>Communication Technology</option>
                     <option>Electronics</option>
                     <option>Entrepreneurship</option>
                     <option>Human Health Care</option>
                     </select>
                </div>
                <div class="form-group">
                    <label>Edit Course Objective: </label>
                    <input name="courseobjective" class="form-control input-sm" type="text" value="'.$row['courseobjective'].'" />
                </div>
                  <div class="form-group">
                    <label>Edit Course Description: </label>
                   <input name="coursedescription" class="form-control input-sm" type="text" value="'.$row['coursedescription'].'" />
                </div>
                <div class="form-group">
                    <label>Edit Course Mode: </label>
                    <select name="coursemode" id="coursemode" class="form-control input-sm" value="'.$row['coursemode'].'" />
                     <option>Online</option>
                     <option>Offline</option>
                     </select>
                </div>
                 <div class="form-group">
                    <label>Edit Course Duration: </label>
                    <select name="courseduration" id="courseduration" class="form-control input-sm" value="'.$row['courseduration'].'" />
                     <option>3 Months</option>
                     <option>6 Months</option>
                     <option>9 Months</option>
                     <option>1 Year</option>
                     </select>
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>7:55 AM 17/03/2018