<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Academic;

use App\Program;

use App\Level;

class CourseController extends Controller
{
	public function getManageCourse()
	{
        $programs=Program::all();
		$academics=Academic::orderBy('academic_id','DESC')->get();
		return view('admin.course.manageCourse',compact('academics','programs'));
	}
    public function postInsertAcademic(Request $request)
    {
    	if($request->ajax())
    	{
    		return response(Academic::create($request->all()));
    	}
    }
    public function postInsertProgram(Request $request)
    {
        if($request->ajax())
        {
            return response(Program::create($request->all()));
        }
    }
    public function postInsertLevel(Request $request)
    {
        if($request->ajax())
        {
            return response(Level::create($request->all()));
        } 
    }
}
