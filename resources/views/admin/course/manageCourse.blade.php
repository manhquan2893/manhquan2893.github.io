@extends('admin.layout.master')
@section('content')
<section id="main-content">
      <div class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Courses</h3>
				<ol class="breadcrumb">
					<li><a href="">Home</a></li>
					<li>Course</li>
					<li>Manage Course</li>
				</ol>
			</div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Manage Course</h3>
		  </div>
		  <div class="panel-body">
		    <div class="row">
		    	<div class="col-sm-3">
		    		<label>Academic Year</label>
		    		<div class="input-group">
		    			<select id="academic_id" type="text" name="academic_id" class="form-control">
		    				@foreach($academics as $aca)
		    				<option value="">{{$aca->academic}}</option>
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
		    			<select id="program_id" type="text" name="academic_id" class="form-control">
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
		    			<select type="text" id="level_id" name="level_id" class="form-control"></select>
		    			<span class="input-group-addon" id="add-more-level">
		    				<span class="fa fa-plus"></span>	
		    			</span>
		    		</div>
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-sm-3">
		    		<label>Academic Year</label>
		    		<div class="input-group">
		    			<select type="text" name="AcademicYear" class="form-control"></select>
		    			<span class="input-group-addon">
		    				<span class="fa fa-plus"></span>	
		    			</span>
		    		</div>
		    	</div>
		    	{{------------------}}
		    	<div class="col-sm-4">
		    		<label>Academic Year</label>
		    		<div class="input-group">
		    			<select type="text" name="AcademicYear" class="form-control"></select>
		    			<span class="input-group-addon">
		    				<span class="fa fa-plus"></span>	
		    			</span>
		    		</div>
		    	</div>
		    	{{------------------}}
		    	<div class="col-sm-5">
		    		<label>Academic Year</label>
		    		<div class="input-group">
		    			<select type="text" name="AcademicYear" class="form-control"></select>
		    			<span class="input-group-addon">
		    				<span class="fa fa-plus"></span>	
		    			</span>
		    		</div>
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-sm-3">
		    		<label>Academic Year</label>
		    		<div class="input-group">
		    			<select type="text" name="AcademicYear" class="form-control"></select>
		    			<span class="input-group-addon">
		    				<span class="fa fa-plus"></span>	
		    			</span>
		    		</div>
		    	</div>
		    	{{------------------}}
		    	<div class="col-sm-4">
		    		<label>Start date</label>
		    		<div class="input-group">
		    			<input type="text" id="start_date" class="form-control">
		    			<span class="input-group-addon">
		    				<span class="fa fa-calendar"></span>	
		    			</span>
		    		</div>
		    	</div>
		    	{{------------------}}
		    	<div class="col-sm-4">
		    		<label>Academic Year</label>
		    		<div class="input-group">
		    			<input type="text" id="end_date" class="form-control">
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
		</div>
  </div>
</section>
@include('admin.popup.academic')
@include('admin.popup.program')
@include('admin.popup.level')
@endsection

@section('script')
<script>
	$(document).ready(function(){
	    $("#start_date").datepicker();

	    //===============================

	    $("#add-more-academic-year").on('click',function(){
	    	$("#academic-year-dialog").modal();
	    });
	    $(".btn-save-academic").on('click',function(){
	    	var academic = $("#new-academic").val();
	    	$.post("insertAcademic",{academic:academic},function(data){
	    		$('#academic_id').append($('<option>',{
	    			text : data.academic,
	    			value: data.id
	    		}));
	    		$('#new_academic').val("");
	    		alert('added successfully!');
	    	});
	    });

	    //===============================
	    
	    $("#add-more-program").on('click',function(){
	    	$("#program-dialog").modal();
	    });
	    $(".btn-save-program").on('click',function(){
	    	var program = $("#new_program").val();
	    	var description = $('#description').val();
	    	$.post("insertProgram",{program:program,description:description},function(data){
	    		$('#program_id').append($('<option>',{
	    			text : data.program,
	    			value: data.id
	    		}));
	    		$('#new_program').val("");
	    		$('#description').val("");
	    		alert('added successfully!');
	    	});
	    });

	    //===============================
	    
	    $("#add-more-level").on('click',function(){
	    	var programs = $('#program_id option');
	    	//selecting child <option>
	    	var program = $('#level-dialog').find('#program_id');   	
	    	//find('') is used for selecting grantchilden and less
	    	$.each(programs,function(i,pro){
	    		$(program).append(pro);
	    	});
	    	$("#level-dialog").modal('show');
	    });

	    $("#level-form").on('submit',function(event){
	    	event.preventDefault();
	    	data= $(this).serialize();
	    	url = $(this).attr('action');
	    	$.post(url,data,function(data){
	    		console.log(data);
	    	});
	    });

	    //===============================
	   
	});
</script>
@endsection