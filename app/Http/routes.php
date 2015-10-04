<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
    //return view('login');
//});

//Route::get('login', 'LoginController@index');
Route::get('profile',['as'=>'profile','uses'=>"HomeController@profile"]);
Route::post('edit_profile', ['as' => 'profile', 'uses' => 'HomeController@edit_profile']);

Route::get('course', ['as' => 'course', 'uses' => 'CourseController@index']);
Route::post('store_course', ['as' => 'course', 'uses' => 'CourseController@store_course']);
Route::get('course/delete/{id}', ['as' => 'course', 'uses' => 'CourseController@delete']);
Route::get('course/edit/{id}', ['as' => 'course', 'uses' => 'CourseController@edit']);

Route::get('/home',['as'=>'home','uses'=>'HomeController@index']);
Route::get('/dash-board',['as'=>'dash-board','uses'=>"DashBoardController@index"]);

Route::get('term', ['as' => 'term', 'uses' => 'TermController@index']);
Route::post('store_term', ['as' => 'term', 'uses' => 'TermController@store_term']);

Route::get('gen-pdf', ['as' => 'gen-pdf', 'uses' => 'PDFController@index']);
Route::post('gen_pdf_course_total', ['as' => 'gen-pdf', 'uses' => 'PDFController@gen_pdf_course_total']);
Route::post('gen_pdf_course_table', ['as' => 'gen-pdf', 'uses' => 'PDFController@gen_pdf_course_table']);
Route::post('gen_pdf_course_cost', ['as' => 'gen-pdf', 'uses' => 'PDFController@gen_pdf_course_cost']);
Route::post('gen_pdf_course_check', ['as' => 'gen-pdf', 'uses' => 'PDFController@gen_pdf_course_check']);

 
Route::controller('/','Auth\AuthController');


