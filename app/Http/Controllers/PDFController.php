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
use mPDF;

class PDFController extends Controller
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

    	return view('gen_pdf')->with('data_login', $this->auth->getUser())
                        ->with('TermCourse', $TermCourse)
                        ->with('menu_list', 'pdf');;
    }
    public function gen_pdf_course_total(Request $request){
        if($request->term_course_id){
            //$html = view('pdf1')->render();
            $TermCourse = TermCourse::where('id', $request->term_course_id)->orderBy('year', 'asc')->orderBy('term', 'asc')->get();
            $data_list = array();
            foreach ($TermCourse as $value) {
                $course = Course::where('users_id', $this->auth->getUser()['id'])
                                ->where('term_course_id', $value->id)
                                ->get()->toArray();
                    if(count($course) > 0){
                        $item['year'] = $value->year;
                        $item['term'] = $value->term;
                        $item['full_name'] = $this->auth->getUser()['full_name'];
                        $item['hour_level'] = $this->auth->getUser()['hour_level'];
                        $item['course'] = $course;
                        
                        array_push($data_list, $item);
                    }
                    
            }
            $data['item'] = $data_list;
            //var_dump($data); exit;
            //return \PDF::output($html)->download();
            $mpdf=new mPDF("th", "A4-L", "15");
            $html = \View::make('pdf1', $data, $data)->render();
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        }else{
            return redirect('/gen-pdf');
        }  
    }
    public function gen_pdf_course_table(Request $request){
        if($request->term_course_id){

            $TermCourse = TermCourse::where('id', $request->term_course_id)->orderBy('year', 'asc')->orderBy('term', 'asc')->get();
            $data_list = array();
            foreach ($TermCourse as $value) {
                $course = Course::where('users_id', $this->auth->getUser()['id'])
                                ->where('term_course_id', $value->id)
                                ->get()->toArray();
                    if(count($course) > 0){
                        $item['year'] = $value->year;
                        $item['term'] = $value->term;
                        $item['full_name'] = $this->auth->getUser()['full_name'];
                        $item['hour_level'] = $this->auth->getUser()['hour_level'];
                        $item['course'] = $course;
                        
                        array_push($data_list, $item);
                    }
                    
            }
            $data['item'] = $data_list;

            $mpdf=new mPDF("th", "A4-L", "15");
            $html = \View::make('pdf2', $data, array())->render();
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        }else{
            return redirect('/gen-pdf');
        }
    }

    public function gen_pdf_course_cost(Request $request){
        if($request->term_course_id){

            $TermCourse = TermCourse::where('id', $request->term_course_id)->orderBy('year', 'asc')->orderBy('term', 'asc')->get();
            $data_list = array();
            foreach ($TermCourse as $value) {
                $course = Course::where('users_id', $this->auth->getUser()['id'])
                                ->where('term_course_id', $value->id)
                                ->get()->toArray();
                    if(count($course) > 0){
                        $item['year'] = $value->year;
                        $item['term'] = $value->term;
                        $item['date_start'] = $value->date_start;
                        $item['date_end'] = $value->date_end;
                        $item['full_name'] = $this->auth->getUser()['full_name'];
                        $item['hour_level'] = $this->auth->getUser()['hour_level'];
                        $item['course'] = $course;
                        
                        array_push($data_list, $item);
                    }
                    
            }
            $data['item'] = $data_list;

            $mpdf=new mPDF("th", "A4-H", "15");
            $html = \View::make('pdf3', $data, array())->render();
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        }else{
            return redirect('/gen-pdf');
        }
    }
    
    public function gen_pdf_course_check(Request $request){
        if($request->term_course_id){

            $TermCourse = TermCourse::where('id', $request->term_course_id)->orderBy('year', 'asc')->orderBy('term', 'asc')->get();
            $data_list = array();
            foreach ($TermCourse as $value) {
                $course = Course::where('users_id', $this->auth->getUser()['id'])
                                ->where('term_course_id', $value->id)
                                ->get()->toArray();
                    if(count($course) > 0){
                        $item['year'] = $value->year;
                        $item['term'] = $value->term;
                        $item['date_start'] = $value->date_start;
                        $item['date_end'] = $value->date_end;
                        $item['full_name'] = $this->auth->getUser()['full_name'];
                        $item['hour_level'] = $this->auth->getUser()['hour_level'];
                        $item['course'] = $course;
                        
                        array_push($data_list, $item);
                    }
                    
            }
            $data['item'] = $data_list;

            $mpdf=new mPDF("th", "A4-L", "15");
            $html = \View::make('pdf4', $data, array())->render();
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        }else{
            return redirect('/gen-pdf');
        }
    }
}


?>