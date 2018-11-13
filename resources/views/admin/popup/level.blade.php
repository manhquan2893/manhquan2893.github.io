  <!-- Modal -->
  <div class="modal fade" id="level-dialog" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Academic Year</h4>
        </div>
        <form action="insertLevel" method="POST" id="level-form">
        <div class="modal-body">
        	<div class="col-md-12">
        		<label>program</label>
        		<select type="text" id="program_id" class="form-control" name="program_id">
        		</select>
        	</div>
        	<div class="col-md-12">
        		<label>level</label>
        		<input id="new-level" name="level" type="text" class="form-control">
        	</div>
        	<div class="col-md-12">
        		<label>description</label>
        		<input id="description" name="description" type="text" class="form-control">
        	</div>
        	
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
          <button class="btn btn-success btn-save-level" type="submit">Save</button>
        </div>
      	</form>
      </div>
      
    </div>
  </div>