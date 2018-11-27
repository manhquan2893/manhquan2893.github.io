<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Academic;
use App\Program;
use App\Level;
use App\Shift;
use App\Time;
use App\Course;

class StudentInfoController extends Controller
{
    //
    public function getStudentInfo()
    {
        $academics=Academic::orderBy('academic_id','DESC')->get();
        $programs=Program::all();     
        $shifts=Shift::all();
        $times=Time::all();
        $course= new CourseController();
        $courses=$course->getCourses()->get();
        return view('admin.student.studentInfo',compact('academics','programs','shifts','times','courses'));
    	
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
