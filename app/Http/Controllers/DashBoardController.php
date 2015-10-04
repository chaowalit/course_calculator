<?php namespace App\Http\Controllers;
 
use Illuminate\Contracts\Auth\Guard;
use App\TermCourse;
use App\Course;
 
class DashBoardController extends Controller {
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('auth');
    }
 
    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $TermCourse = TermCourse::orderBy('year', 'asc')->orderBy('term', 'asc')->get();
        $data = array();
        foreach ($TermCourse as $value) {
            $course = Course::where('users_id', $this->auth->getUser()['id'])
                            ->where('term_course_id', $value->id)
                            ->get()->toArray();
                if(count($course) > 0){
                    $item['year'] = $value->year;
                    $item['term'] = $value->term;
                    $item['course'] = $course;
                    
                    array_push($data, $item);
                }
                
        }
        
        //var_dump($TermCourse[0]['year']); exit;
        return view('dashboard')->with('data_login', $this->auth->getUser())->with('course', $data)->with('menu_list', 'dashboard');
    }

    
 
}