 <!-- Modal -->
  <div class="modal fade" id="choose-course-dialog" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Choose Course</h4>
        </div>
        <div class="modal-body">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Manage Course</h3>
            </div>
            <form action="insertCourse" method="POST" id="form-create-course">
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-3">
                  <label>Academic Year</label>
                  <div class="input-group">
                    <select id="academic_id" type="text" name="academic_id" class="form-control">
                      @foreach($academics as $aca)
                      <option value="{{$aca->academic_id}}">{{$aca->academic}}</option>
                              @endforeach
                    </select>
                    <span id="add-more-academic-year" class="input-group-addon">
                      <span class="fa fa-plus"></span>  
                    </span>
                  </div>
                </div> 
                {{------------------}}
                <div class="col-sm-4">
                  <label>Program</label>
                  <div class="input-group">
                    <select id="program_id" type="text" name="program_id" class="form-control">
                      <option value="">----------------</option>
                      @foreach($programs as $pro)
                      <option value="{{$pro->program_id}}">{{$pro->program}}</option>
                      @endforeach
                    </select>
                    <span class="input-group-addon" id="add-more-program">
                      <span class="fa fa-plus"></span>  
                    </span>
                  </div>
                </div>
                {{------------------}}
                <div class="col-sm-5">
                  <label>Level</label>
                  <div class="input-group">
                    <select type="text" id="level_id" name="level_id" class="form-control">
                      <option value="">------------------</option>
                    </select>
                    <span class="input-group-addon" id="add-more-level">
                      <span class="fa fa-plus"></span>  
                    </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <label>Shift</label>
                  <div class="input-group">
                    <select id="shift_id" type="text" name="shift_id" class="form-control">
                      <option value="">------------------</option>
                      @foreach($shifts as $shi)
                      <option value="{{$shi->shift_id}}">{{$shi->shift}}</option>
                    @endforeach
                    </select>
                    <span id="add-more-shift" class="input-group-addon">
                      <span class="fa fa-plus"></span>  
                    </span>
                  </div>
                </div>
                {{------------------}}
                <div class="col-sm-3">
                  <label>Time</label>
                  <div class="input-group">
                    <select id="time_id" type="text" name="time_id" class="form-control">
                      <option value="">------------------</option>
                      @foreach($times as $tim)
                      <option value="{{$tim->time_id}}">{{$tim->time}}</option>
                    @endforeach
                    </select>
                    <span id="add-more-time" class="input-group-addon">
                      <span class="fa fa-plus"></span>  
                    </span>
                  </div>
                </div>
                          
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <label>Start date</label>
                  <div class="input-group">
                    <input type="text" id="start_date" name="start_date" class="form-control">
                    <span class="input-group-addon">
                      <span class="fa fa-calendar"></span>  
                    </span>
                  </div>
                </div>
                {{------------------}}
                <div class="col-sm-4">
                  <label>End date</label>
                  <div class="input-group">
                    <input type="text" id="end_date" name="end_date" class="form-control">
                    <span class="input-group-addon">
                      <span class="fa fa-calendar"></span>  
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <button type="submit" class="btn btn-default">Create Course</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>