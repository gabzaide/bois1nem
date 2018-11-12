
<!-- == COURSE UPDATE MODAL  ======== -->
<?php echo '<div id="updatestudentprofiling'.$row['studentid'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> Update Student Profiing </h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['studentid'].'" name="studentid" id="studentid"/>
                <div class="form-group"> 
                    <label> Enter Updated Student Number: </label>
                    <input name="studentno" id="studentno" class="form-control input-sm" type="number" value="'.$row['studentno'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Password: </label>
                    <input name="password" id="password" class="form-control input-sm" type="password" value="'.$row['password'].'" />
                </div>
                <div class="form-group">
                    <label> Enter Updated Course Taken: </label>
                     <select name="course" id="course" class="form-control input-sm" value="'.$row['course'].'" />
                        <option> Agricuture </option>
                        <option> Automotive </option>
                        <option> Communication Technoogy </option>
                        <option> Electronics </option>
                        <option> Entrepreneurship </option>
                        <option> Human Helath Care </option>
                        <option> Lifelong Learning Skills </option>
                        <option> Maritime </option>
                        <option> Tourism </option>
                        </select>
                </div>
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
                    <label> Enter Updated Age: </label>
                    <input name="age" id="age" class="form-control input-sm" type="number" value="'.$row['age'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Gender: </label>
                    <select name="gender" id="gender" class="form-control input-sm" value="'.$row['gender'].'" />
                        <option> Male </option>
                        <option> Female </option>
                    </select>    
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Religiom: </label>
                    <input name="religion" id="religion" class="form-control input-sm" type="text" value="'.$row['religion'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Citizenship: </label>
                    <input name="citizenship" id="citizenship" class="form-control input-sm" type="email" value="'.$row['citizenship'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Civil Status: </label>
                    <select name="civilstatus" id="civilstatus" class="form-control input-sm" value="'.$row['civilstatus'].'" />
                        <option> Single </option>
                        <option> Married </option>
                        <option> Widowed </option>
                        <option> Separated </option>
                    </select>    
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Date Of Birth: </label>
                    <input name="dateofbirth" id="dateofbirth" class="form-control input-sm" type="date" value="'.$row['dateofbirth'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Place Of Birth: </label>
                    <input name="placeofbirth" id="placeofbirth" class="form-control input-sm" type="text" value="'.$row['placeofbirth'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Contact Number: </label>
                    <input name="contactno" id="contactno" class="form-control input-sm" type="date" value="'.$row['contactno'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Address: </label>
                    <input name="address" id="address" class="form-control input-sm" type="text" value="'.$row['address'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Email Address: </label>
                    <input name="emailaddress" id="emailaddress" class="form-control input-sm" type="email" value="'.$row['emailaddress'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Status: </label>
                    <select name="status" id="status" class="form-control input-sm" value="'.$row['status'].'" />
                        <option> Approved </option>
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="update_student_profiling" value="Update Course"/>
        </div>
    </div>
  </div>
</form>
</div>';?>

