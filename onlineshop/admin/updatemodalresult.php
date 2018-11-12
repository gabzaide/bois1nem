
<!-- == COURSE UPDATE MODAL  ======== -->
<?php echo '<div id="updateexamresult'.$row['studentnumber'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> Update Exam Result </h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['resultid'].'" name="resultid" id="resultid"/>
                <div class="form-group"> 
                    <label> Enter Updated Student Number: </label>
                    <input name="studentnumber" id="studentnumber" class="form-control input-sm" type="number" value="'.$row['studentnumber'].'" />
                </div>
                <div class="form-group"> 
                    <label> Enter Updated Student Name: </label>
                    <input name="studentname" id="studentname" class="form-control input-sm" type="text" value="'.$row['studentname'].'" />
                </div>
                <div class="form-group">
                    <label> Enter Updated Course Name: </label>
                     <select name="coursetaken" id="coursetaken" class="form-control input-sm" value="'.$row['coursetaken'].'" />
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
                        <select name="branch" id="branch" class="form-control input-sm" value="'.$row['branch'].'" />
                            <option> Cubao  </option>
                            <option> Fairview </option>
                            <option> Novailches  </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Enter Your Course Mode:</label>
                        <select name="coursemode" id="coursemode" class="form-control input-sm" value="'.$row['coursemode'].'" />
                            <option> Online </option>
                            <option> Offine </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Enter Your Course Duration:</label>
                        <select name="courseduration" id="courseduration" class="form-control input-sm" value="'.$row['courseduration'].'" />
                            <option> 3 Months  </option>
                            <option> 6 Months </option>
                            <option> 9 Months  </option>
                            <option> 1 Year </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><b> Enter Your Date Posted: </b></label>
                        <input name="dateposted" id="dateposted" class="form-control input-sm" type="date" value="'.$row['dateposted'].'" />
                    </div>
                    <div class="form-group">
                        <label> Enter Your Result: </label>
                        <select name="result" id="result" class="form-control input-sm" value="'.$row['result'].'" />
                            <option> Passed  </option>
                            <option> Failed  </option>
                        </select>
                    </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="update_exam_result" value="Update Course"/>
        </div>
    </div>
  </div>
</form>
</div>';?>

