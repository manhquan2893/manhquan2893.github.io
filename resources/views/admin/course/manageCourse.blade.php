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
		<!-- ----------------------- -->
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
		<!-- ---------------------------- -->
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Course Detail</h3>
		  </div>
		  <div class="panel-body">
		    <table class="table" >
			    <thead>
			      <tr>
			        <th>Program</th>
			        <th>Level</th>
			        <th>Shift</th>
			        <th>Time</th>
			        <th>Start_date</th>
			        <th>End_date</th>
			      </tr>
			    </thead>
			    <tbody id="list-of-courses">
			    	@foreach($courses as $cou)
			    		<tr>
			    			<th>{{$cou->program}}</th>
					        <th>{{$cou->level}}</th>
					        <th>{{$cou->shift}}</th>
					        <th>{{$cou->time}}</th>
					        <th>{{$cou->start_date}}</th>
					        <th>{{$cou->end_date}}</th>
			    		</tr>
			    	@endforeach
			    </tbody>
			  </table>
		  </div>
		</div>
  </div>
</section>
@include('admin.popup.academic')
@include('admin.popup.program')
@include('admin.popup.level')
@include('admin.popup.shift')
@include('admin.popup.time')
@endsection

@section('script')
<script>

	$(document).ready(function(){
		 $("#start_date").datepicker();
	    $("#end_date").datepicker();


		//================================
		function showCourse(){
			var academic_id=$("#academic_id").val();
			var program_id=$("#program_id").val();
			var level_id=$("#level_id").val();
			var shift_id=$("#shift_id").val();
			var time_id=$("#time_id").val();
			var start_date=$("#start_date").val();
			var end_date=$("#end_date").val();
			$.get("getAjaxCourse",{academic_id:academic_id,program_id:program_id,level_id:level_id,shift_id:shift_id,time_id:time_id,start_date:start_date,end_date:end_date},function(data){
				$("#list-of-courses").empty().append(data);
			});


		};
	   
	    //===============================

	    $("#program_id").on('change',function(){
	    	showCourse();
	    });	
	    $("#level_id").on('change',function(){
	    	showCourse();
	    });	
	    $("#shift_id").on('change',function(){
	    	showCourse();
	    });	
	    $("#time_id").on('change',function(){
	    	showCourse();
	    });
	    $("#start_date").on('change',function(){
	    	showCourse();
	    });	
	    $("#end_date").on('change',function(){
	    	showCourse();
	    });		
	    //=================================

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
	    		$('#new-academic').val("");
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
	    		$(program).append($('<option>',{
	    			text : $(pro).text(),
	    			value: $(pro).val()
	    		}));
	    	});
	    	$("#level-dialog").modal('show');
	    });

	    $("#level-form").on('submit',function(event){
	    	event.preventDefault();
	    	data= $(this).serialize();
	    	url = $(this).attr('action');
	    	$.post(url,data,function(data){
	    		$("#level_id").append($('<option>',{
	    			text: data.level,
	    			value: data.id
	    		}));
	    	});
	    });

	    //=================================
	   
	   $("#program_id").on('change',function(e){
	   		$("#level_id").empty();
	   		$("#level_id").append($('<option>',{
	   					text: '-----------------',
	   					value:""
	   				}));
	   		var program_id= $(this).val();
	   		$.get("showLevel",{program_id:program_id},function(data){
	   			var levels = data;
	   			$.each(levels,function(i,lev){
	   				$("#level_id").append($('<option>',{
	   					text: lev.level,
	   					value:lev.level_id
	   				}));
	   			});
	   		});
	   });
	   //========================
	    $("#add-more-shift").on('click',function(){
	    	$("#shift-dialog").modal();
	    });
	    $(".btn-save-shift").on('click',function(){
	    	var shift = $("#new-shift").val();	    	
	    	$.post("insertShift",{shift:shift},function(data){
	    		$('#shift_id').append($('<option>',{
	    			text : data.shift,
	    			value: data.id
	    		}));
	    		$('#new-shift').val("");
	    		alert('added successfully!');
	    	});
	    });

	    //========================
	    $("#add-more-time").on('click',function(){
	    	$("#time-dialog").modal();
	    });
	    $(".btn-save-time").on('click',function(){
	    	var time = $("#new-time").val();
	    	$.post("insertTime",{time:time},function(data){
	    		$('#time_id').append($('<option>',{
	    			text : data.time,
	    			value: data.id
	    		}));
	    		$('#new-time').val("");
	    		alert('added successfully!');
	    	});
	    });

	    //========================

	    $("#form-create-course").on('submit',function(event){
	    	event.preventDefault();
	    	data= $(this).serialize();
	    	url = $(this).attr('action');
		    $.post(url,data,function(data){
		    	console.log(data);
		   		$.get("getMoreCourse",function(data){
		   			$("#list-of-courses").append(data);
		   		});	
		    });
	    });
	});
</script>
@endsection