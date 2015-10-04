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

class TermController extends Controller
{
	protected $auth;

	protected $rules = [
        
    ];

	public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('auth');
    }
    public function index(){
    	//$jd = gregoriantojd(9,13,2015);
		//echo jddayofweek($jd,2); exit;

    	$TermCourse = TermCourse::all();

    	return view('term')->with('data_login', $this->auth->getUser())
                        ->with('TermCourse', $TermCourse)
                        ->with('menu_list', 'term');;
    }
    public function store_term(Request $request){
        if($request->term_course_id && $request->datepicker_1 && $request->datepicker_2){
            $data = TermCourse::find($request->term_course_id);
            $data->date_start = date("Y-m-d", strtotime($request->datepicker_1));
            $data->date_end = date("Y-m-d", strtotime($request->datepicker_2));
            $data->save();
            return redirect('/term');
        }else{
            return redirect('/term');
        }
    }
}


?>