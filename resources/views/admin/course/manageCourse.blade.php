@extends('admin.layout.master')
@section('content')
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
		    			<input type="text" name="AcademicYear" class="form-control">
		    			<span class="input-group-addon">
		    				<span class="fa fa-plus"></span>	
		    			</span>
		    		</div>
		    	</div>
		    	{{------------------}}
		    	<div class="col-sm-4">
		    		<label>Academic Year</label>
		    		<div class="input-group">
		    			<input type="text" name="AcademicYear" class="form-control">
		    			<span class="input-group-addon">
		    				<span class="fa fa-plus"></span>	
		    			</span>
		    		</div>
		    	</div>
		    	{{------------------}}
		    	<div class="col-sm-5">
		    		<label>Academic Year</label>
		    		<div class="input-group">
		    			<input type="text" name="AcademicYear" class="form-control">
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
		    			<input type="text" name="AcademicYear" class="form-control">
		    			<span class="input-group-addon">
		    				<span class="fa fa-plus"></span>	
		    			</span>
		    		</div>
		    	</div>
		    	{{------------------}}
		    	<div class="col-sm-4">
		    		<label>Academic Year</label>
		    		<div class="input-group">
		    			<input type="text" name="AcademicYear" class="form-control">
		    			<span class="input-group-addon">
		    				<span class="fa fa-plus"></span>	
		    			</span>
		    		</div>
		    	</div>
		    	{{------------------}}
		    	<div class="col-sm-5">
		    		<label>Academic Year</label>
		    		<div class="input-group">
		    			<input type="text" name="AcademicYear" class="form-control">
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
		    			<input type="text" name="AcademicYear" class="form-control">
		    			<span class="input-group-addon">
		    				<span class="fa fa-plus"></span>	
		    			</span>
		    		</div>
		    	</div>
		    	{{------------------}}
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
		    		<label>Academic Year</label>
		    		<div class="input-group">
		    			<input type="text" id="end_date" name="AcademicYear" class="form-control">
		    			<span class="input-group-addon">
		    				<span class="fa fa-calendar"></span>	
		    			</span>
		    		</div>
		    	</div>
		    </div>
		  </div>
		</div>

@endsection

@section('script')
<script>
	$(document).ready(function(){
	    $("#start_date").datepicker();
	});
</script>
@endsection