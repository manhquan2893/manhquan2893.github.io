<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentInfoController extends Controller
{
    //
    public function getStudentInfo()
    {
    	return view('admin.student.studentInfo');
    }
    public function test()
    {
    	return view('admin.student.test');
    }
    public function upload(Request $request)
    {
    	if($request->hasFile('file')){
    		$file= $request->file;
            /*upload file with original file name*/
    		$file->move('avatar',$file->getClientOriginalName());
    	}
    }
}
