@extends('admin.layout.master')
@section('content')
<style>
	.table{
		 margin-top: -19px;
	}
	#thumbnail{
		height: 160px;
		width: 160px;
		margin-left: 49px;
		overflow: hidden;
	}
</style>
<section id="main-content">
	<div class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Student</h3>
				<ol class="breadcrumb">
					<li><a href="">Home</a></li>
					<li>Student</li>
					<li>Create Student</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="btn btn-default" id="choose-course">
					Choose Course
					<span class="fa fa-plus"></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel panel-body" style="color:#ccc; margin-bottom: -15px">No Course choosen</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Student Information</h3>
		  </div>
		  <div class="panel-body">
		    <div class="row">
		    	<div class="col-md-9">
		    		<div class="row">
		    			<div class="col-md-4">
			    			<label for="">Name</label>
			    			<input type="text" class="form-control">
			    		</div>
			    		<div class="col-md-4">
			    			<label for="">Date of Birth</label>
			    			<input type="text" class="form-control">
			    		</div>
			    		<div class="col-md-4">
			    			<fieldset>
				    			<legend>Sex:</legend>
					    		<table class="table">
									    <thead>
									      <tr>
									        <td>
									        	<input type="radio" name="gender" value="male" >Male
									        </td>
									        <td>
									        	<input type="radio" name="gender" value="female">Female
									        </td>
									      </tr>
									    </thead>
									 </table>
								 </fieldset>
			    		</div>
		    		</div>
		    		<div class="row">
		    			<div class="col-md-4">
			    			<label for="">Name</label>
			    			<input type="text" class="form-control">
			    		</div>
			    		<div class="col-md-4">
			    			<label for="">Date of Birth</label>
			    			<input type="text" class="form-control">
			    		</div>
			    		<div class="col-md-4">
			    			<fieldset>
				    			<legend>Sex:</legend>
					    		<table class="table">
									    <thead>
									      <tr>
									        <td>
									        	<input type="radio" name="gender" value="male">Male
									        </td>
									        <td>
									        	<input type="radio" name="gender" value="female">Female
									        </td>
									      </tr>
									    </thead>
									 </table>
								 </fieldset>
			    		</div>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    	<form action="upload" enctype="multipart/form-data" method="POST">
		    		{{ csrf_field() }}
		    	<table class="table" style="margin-top:-6px;">
		    		<thead>
		    			<tr id="id" align="center">
		    				<td>0000000</td>
		    			</tr>
		    		</thead>
		    		<tbody>
			    		<tr>
			    			<td>
			    				<div id="thumbnail">
			    					<img src="http://via.placeholder.com/160" id="image" alt="">
			    				</div>
			    			</td>
			    		</tr>
			    		<tr id="name" align="center">
			    			<td><input type="file" id="file" name="file"></td>
			    		</tr>
		    		</tbody>
		    	</table>
		    	<input type="submit" value="submit">
		    	</form>		
		    	</div>
		    </div>
		  </div>
		</div>
	</div>
</section>
@include('admin.popup.chooseCourse')
@endsection

@section('script')
	<script>
		$(document).ready(function(){

				$("#choose-course").on('click',function(){
				
				$("#choose-course-dialog").modal();
			});
			//display image before uploading
			document.getElementById("file").onchange = function () {
		    var reader = new FileReader();
		    reader.onload = function (e) {
		        // get loaded data and render thumbnail.
		        document.getElementById("image").src = e.target.result;
		    };
		    // read the image file as a data URL.
		    reader.readAsDataURL(this.files[0]);
		};
		});
	</script>>
@endsection