<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Contracts\Auth\Guard;

use App\Course;
use App\TermCourse;

use Redirect;
use Session;

class CourseController extends Controller
{
    protected $auth;

    protected $rules = [
        'term_course_id' => ['required'],
        'number_course' => ['required'],
        'name_course' => ['required'],
        'credits' => ['required'],
        'groups' => ['required'],
        'number_instructors' => ['required'],
        'number_student' => ['required'],
        'date_teach' => ['required'],
        'hour_practice' => ['required'],
        'hour_describe' => ['required'],
        'room_number' => ['required'],
    ];

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('auth');
    }

    public function index(){
    	$TermCourse = TermCourse::all();

    	return view('course')->with('data_login', $this->auth->getUser())->with('TermCourse', $TermCourse)->with('menu_list', 'dashboard');
    }

    public function store_course(Request $request){
        if($this->validate($request, $this->rules)){
            $this->validate($request, $this->rules)->withInput();
        }

        if(!$request->course_id){
            $course = new Course(
                    array(
                            "users_id" => $this->auth->getUser()['id'],
                            "term_course_id" => $request->term_course_id,
                            "number_course" => $request->number_course,
                            "name_course" => $request->name_course,
                            "credits" => $request->credits,
                            "groups" => $request->groups,
                            "number_instructors" => $request->number_instructors,
                            "number_student" => $request->number_student,
                            "date_teach" => $request->date_teach,
                            "time_teach" => $request->timepicker_1." : 00 - " . $request->timepicker_2." : 00",
                            "hour_practice" => $request->hour_practice,
                            "hour_describe" => $request->hour_describe,
                            "room_number" => $request->room_number,
                        )
                );
            $course->save();

            return redirect('/course')->with('message', 'Successfully store course...');
        }else{
            $data = Course::find($request->course_id);
            $data->users_id = $this->auth->getUser()['id'];
            $data->term_course_id = $request->term_course_id;
            $data->number_course = $request->number_course;
            $data->name_course = $request->name_course;
            $data->credits = $request->credits;
            $data->groups = $request->groups;
            $data->number_instructors = $request->number_instructors;
            $data->number_student = $request->number_student;
            $data->date_teach = $request->date_teach;
            $data->time_teach = $request->timepicker_1." : 00 - " . $request->timepicker_2." : 00";
            $data->hour_practice = $request->hour_practice;
            $data->hour_describe = $request->hour_describe;
            $data->room_number = $request->room_number;
            $data->save();


            Session::flash('success', 'You update ['.$data->title.'] success.');
            return redirect('/dash-board');
        }
        
    }

    public function delete($id = 0){
        $delete = Course::find($id);

        $delete->delete();
        return redirect('/dash-board');
    }

    public function edit($id){
        $edit = Course::find($id);

        $TermCourse = TermCourse::all();

        return view('edit_course')
                ->with('data_login', $this->auth->getUser())
                ->with('TermCourse', $TermCourse)
                ->with('data_edit', $edit)
                ->with('menu_list', 'dashboard');
    }
}
