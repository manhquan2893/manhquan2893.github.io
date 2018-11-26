<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Academic;
use App\Program;
use App\Level;
use App\Shift;
use App\Time;
use App\Course;

class CourseController extends Controller
{

    public function getCourses()
    {
        $courses=Course::join('level','course.level_id','=','level.level_id')
                ->join('academic','course.academic_id','=','academic.academic_id')
                ->join('program','course.program_id','=','program.program_id')
                ->join('shift','course.shift_id','=','shift.shift_id')
                ->join('time','course.time_id','=','time.time_id');
        return($courses);
    }
    public function getMoreCourse()
    {
        $course=$this->getCourses()->orderBy('course_id','desc')->take(1)->get();
        return view('admin.course.ajaxClass',compact('course'));
    }
	public function getManageCourse()
	{
		$academics=Academic::orderBy('academic_id','DESC')->get();
        $programs=Program::all();     
        $shifts=Shift::all();
        $times=Time::all();
        $courses=$this->getCourses()->get();
		return view('admin.course.manageCourse',compact('academics','programs','shifts','times','courses'));
	}
    public function getAjaxCourse(Request $request)
    {
        if($request->program_id!="" &&
            $request->level_id=="" &&
            $request->shift_id=="")
            {
            $criterial=array(
                'course.academic_id'=>$request->academic_id,
                'course.program_id'=>$request->program_id);
            }
        elseif($request->program_id!="" &&
                $request->level_id!="" &&
                $request->shift_id==""
                )
            {
           $criterial=array(
                'course.academic_id'=>$request->academic_id,
                'course.program_id'=>$request->program_id,
                'course.level_id'=>$request->level_id,
                );
            }
        elseif($request->program_id!="" &&
                $request->level_id!="" &&
                $request->shift_id!="")
            {
           $criterial=array(
                'course.academic_id'=>$request->academic_id,
                'course.program_id'=>$request->program_id,
                'course.level_id'=>$request->level_id,
                'course.shift_id'=>$request->shift_id);
            }
        $course=$this->getCourses()
                        ->Where($criterial)
                        ->get();
        return view('admin.course.ajaxClass',compact('course'));

    }

    public function postInsertAcademic(Request $request)
    {
        return response(Academic::create($request->all()));
    }
    public function postInsertProgram(Request $request)
    {
        return response(Program::create($request->all()));        
    }
    public function postInsertLevel(Request $request)
    {
        return response(Level::create($request->all()));
    }
    public function showLevel(Request $request)
    {
        return response(Level::Where('program_id',$request->program_id)->get());
    }
    public function postInsertShift(Request $request)
    {
        return response(Shift::create($request->all()));
    }
    public function postInsertTime(Request $request)
    {
        return response(Time::create($request->all()));         
    }
    public function postInsertCourse(Request $request)
    {
        return response(Course::create($request->all()));    
    }
}
