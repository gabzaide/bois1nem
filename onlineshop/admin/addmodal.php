

<!-- =========================  ADD PENDING ACCOUNTS MODAL ======================= -->
<div id="addadminprofiling" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> Add Admin Profiing </h4>
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-md-12">
                     <div class="form-group">
                        <label><b> Enter Your First Name: </b></label>
                        <input required name="firstname" id="firstname" class="form-control input-sm" type="text" placeholder="First Name" />
                    </div>
                     <div class="form-group">
                        <label><b> Enter Your Middle Name: </b></label>
                        <input required name="middlename" id="middlename" class="form-control input-sm" type="text" placeholder="Middle Name" />
                    </div>
                     <div class="form-group">
                        <label><b> Enter Your Famiy Name: </b></label>
                        <input required name="familyname" id="familyname" class="form-control input-sm" type="text" placeholder="Family Name" />
                    </div>
                     <div class="form-group">
                        <label><b> Enter Your Email Address: </b></label>
                        <input required name="emailaddress" id="emailaddress" class="form-control input-sm" type="email" placeholder="Email Address" />
                    </div>
                     <div class="form-group">
                        <label><b> Enter Your Username: </b></label>
                        <input required name="username" id="username" class="form-control input-sm" type="text" placeholder="Username" />
                    </div>
                     <div class="form-group">
                        <label><b> Enter Your Password: </b></label>
                        <input required name="password" id="password" class="form-control input-sm" type="password" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <label> Status: </label>
                        <select name="status" id="status" class="form-control input-sm">
                            <option> Approved  </option>
                        </select>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_add" name="add_admin_profiling" value="Add Admin Profiing"/>
        </div>
    </div>
  </div>
  </form>
</div>

<!-- =========================  ADD APPROVED STUDENTS  MODAL ======================= -->
<div id="addstudentprofiling" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> Add Students Profiling </h4>
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-md-12">
                     <div class="form-group">
                        <label><b> Enter Your Student Number: </b></label>
                        <input required name="studentno" id="studentno" class="form-control input-sm" type="number" placeholder="Student Number" />
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your Password: </b></label>
                        <input required name="password" id="password" class="form-control input-sm" type="password" placeholder="Password
                        " />
                    </div>
                    <div class="form-group">
                        <label>Enter Chosen Course:</label>
                        <select name="course" id="course" class="form-control input-sm">
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
                        <label> Enter Chosen Branch:</label>
                        <select name="branch" id="branch" class="form-control input-sm">
                            <option> Cubao  </option>
                            <option> Fairview </option>
                            <option> Novailches  </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your First Name: </b></label>
                        <input required name="firstname" id="firstname" class="form-control input-sm" type="text" placeholder="First Name" />
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your Middle Name: </b></label>
                        <input required name="middlename" id="middlename" class="form-control input-sm" type="text" placeholder="Middle Name" />
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your Famiy Name: </b></label>
                        <input required name="familyname" id="familyname" class="form-control input-sm" type="text" placeholder="Family Name" />
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your Age: </b></label>
                        <input required name="age" id="age" class="form-control input-sm" type="number" placeholder="Age" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Gender: </label>
                        <select name="gender" id="gender" class="form-control input-sm">
                            <option> Male </option>
                            <option> Female </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your Religion: </b></label>
                        <input required name="religion" id="religion" class="form-control input-sm" type="text" placeholder="Religion" />
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your Citizenship: </b></label>
                        <input required name="citizenship" id="citizenship" class="form-control input-sm" type="text" placeholder="Citizenship" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Civil Status: </label>
                        <select name="civilstatus" id="civilstatus" class="form-control input-sm">
                            <option> Single </option>
                            <option> Married </option>
                            <option> Widowed </option>
                            <option> Separated </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your Date Of Birth: </b></label>
                        <input required name="dateofbirth" id="dateofbirth" class="form-control input-sm" type="date" placeholder="Date Of Birth" />
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your Place Of  Birth: </b></label>
                        <input required name="placeofbirth" id="placeofbirth" class="form-control input-sm" type="text" placeholder="Place Of Birth" />
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your Contact Number: </b></label>
                        <input required name="contactno" id="contactno" class="form-control input-sm" type="number" placeholder="Contact Number" />
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your Address: </b></label>
                        <input required name="address" id="address" class="form-control input-sm" type="text" placeholder="Address" />
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your Email  Address: </b></label>
                        <input required name="emailaddress" id="emailaddress" class="form-control input-sm" type="emai" placeholder="Email Address" />
                    </div>
                    <div class="form-group">
                        <label> Status: </label>
                        <select name="status" id="status" class="form-control input-sm">
                            <option> Approved  </option>
                        </select>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_add" name="add_student_profiling" value="Add Students Profiling"/>
        </div>
    </div>
  </div>
  </form>
</div>
<!-- =========================  ADD COURSES MODAL ======================= -->
<div id="addcourse" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> Add Programs & Services </h4>
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-md-12">
                     <div class="form-group">
                        <label><b> Enter Course Number: </b></label>
                        <input required name="coursenumber" id="coursenumber" class="form-control input-sm" type="number" placeholder="Course Number" />
                    </div>
                    <div class="form-group">
                        <label>Enter Course Name:</label>
                        <select name="coursename" id="coursename" class="form-control input-sm">
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
                        <label><b> Enter Course Objective: </b></label>
                        <input required name="courseobjective" id="courseobjective" class="form-control input-sm" type="text" placeholder="Course Objective" />
                    </div>
                     <div class="form-group">
                        <label><b> Enter Course Description: </b></label>
                        <input required name="coursedescription" id="coursedescription" class="form-control input-sm" type="text" placeholder="Course Description" />
                    </div>
                    <div class="form-group">
                        <label>Enter Course Mode:</label>
                        <select name="coursemode" id="coursemode" class="form-control input-sm">
                            <option> Online </option>
                            <option> Offine </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Enter Course Duration:</label>
                        <select name="courseduration" id="courseduration" class="form-control input-sm">
                            <option> 3 Months  </option>
                            <option> 6 Months </option>
                            <option> 9 Months  </option>
                            <option> 1 Year </option>
                        </select>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_add" name="add_course" value="Add Programs & Services"/>
        </div>
    </div>
  </div>
  </form>
</div>

<!-- =========================  ADD PENDING ACCOUNTS MODAL ======================= -->
<div id="addexamresult" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> Add Exam Results </h4>
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-md-12">
                     <div class="form-group">
                        <label><b> Enter Your Student Number: </b></label>
                        <input required name="studentnumber" id="studentnumber" class="form-control input-sm" type="number" placeholder="Student Number" />
                    </div>
                     <div class="form-group">
                        <label><b> Enter Your Student Name: </b></label>
                        <input required name="studentname" id="studentname" class="form-control input-sm" type="text" placeholder="Student Name" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Course Taken:</label>
                        <select name="coursetaken" id="coursetaken" class="form-control input-sm">
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
                        <label> Enter Your Chosen Branch:</label>
                        <select name="branch" id="branch" class="form-control input-sm">
                            <option> Cubao  </option>
                            <option> Fairview </option>
                            <option> Novailches  </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Enter Your Course Mode:</label>
                        <select name="coursemode" id="coursemode" class="form-control input-sm">
                            <option> Online </option>
                            <option> Offine </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Enter Your Course Duration:</label>
                        <select name="courseduration" id="courseduration" class="form-control input-sm">
                            <option> 3 Months  </option>
                            <option> 6 Months </option>
                            <option> 9 Months  </option>
                            <option> 1 Year </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your Date Posted: </b></label>
                        <input required name="dateposted" id="dateposted" class="form-control input-sm" type="date" placeholder="Date Posted" />
                    </div>
                    <div class="form-group">
                        <label> Enter Your Result: </label>
                        <select name="result" id="result" class="form-control input-sm">
                            <option> Passed  </option>
                            <option> Failed  </option>
                        </select>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_add" name="add_exam_result" value="Add Exam Results"/>
        </div>
    </div>
  </div>
  </form>
</div>

