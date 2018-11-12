
<!-- =========================  ADD COURSES MODAL ======================= -->
<div id="addmodal" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> Add Subject </h4>
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-md-12">
                     <div class="form-group">
                        <label><b> Enter Course Number: </b></label>
                        <input required name="coursenumber" id="coursenumber" class="form-control input-sm" type="text" placeholder="Course Number" />
                    </div>
                    <div class="form-group">
                        <label><b> Enter Course Name: </b></label>
                        <input required name="coursename" id="coursename" class="form-control input-sm" type="text" placeholder="Course Name" />
                    </div>
                    <div class="form-group">
                        <label><b> Enter Course Objective: </b></label>
                        <input required name="courseobjective" id="courseobjective" class="form-control input-sm" type="text" placeholder="Course Objective" />
                    </div>
                     <div class="form-group">
                        <label><b> Enter Course Description: </b></label>
                        <input required name="coursedescription" id="coursedescription" class="form-control input-sm" type="text" placeholder="Course Description" />
                    </div>
                    <div class="form-group">
                        <label><b> Enter Course Mode: </b></label>
                        <input required name="coursemode" id="coursemode" class="form-control input-sm" type="text" placeholder="Course Mode" />
                    </div>
                    <div class="form-group">
                        <label><b> Enter Course Duration: </b></label>
                        <input required name="courseduration" id="courseduration" class="form-control input-sm" type="text" placeholder="Course Duration" />
                    </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_add" name="btn_add" value="Add Programs & Services"/>
        </div>
    </div>
  </div>
  </form>
</div>


