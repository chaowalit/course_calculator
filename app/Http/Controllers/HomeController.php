<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    protected $rules = [
        'full_name' => ['required'],
        'faculty' => ['required'],
        'hour_level' => ['required'],
    ];
 
	/**
     * The Guard implementation.
     *
     * @var Authenticator
     */
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        //$this->middleware('guest', ['except' => 'getLogout']);
        $this->middleware('auth');
    }

    public function index()
    {
        //echo "<pre>";
    	//print_r($this->auth->getUser()['email']);
        //echo "</pre>";
        return redirect('/dash-board');
    }

    public function profile(){
        return view('profile')->with('data_login', $this->auth->getUser());
    }

    public function edit_profile(Request $request){
        $this->validate($request, $this->rules);

        User::where('id', $this->auth->getUser()['id'])
            ->update(['full_name' => $request->full_name, 'faculty' => $request->faculty, 'hour_level' => $request->hour_level]);

        return redirect('/profile')->with('message', 'Successfully update profile...');
    }
}

?>