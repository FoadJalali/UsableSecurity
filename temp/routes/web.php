<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::any('/register', function(){
	return abort(403);
});

Route::group([], function (){

    // Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->namespace('Web')->name('panel.')->prefix('panel')->group(function(){
    Route::get('/template', 'ExcelController@download');
    Route::middleware([
		'check.excel.file',
		'check.excel.department',
		'check.excel.position',
		'check.excel.job',
		'check.excel.person',
		'check.excel.education',
		'check.excel.course',
		'check.excel.employment',
		'check.excel.resume',
		'check.excel.reward'
	])->post('/template', 'ExcelController@upload');
	Route::resource('courses','CourseController');
	Route::resource('departments','DepartmentController');
	Route::resource('educationals','EducationalController');
	Route::resource('employments','EmploymentController');
	Route::resource('jobs','JobController');
	Route::resource('persons','PersonController');
	Route::resource('positions','PositionController');
	Route::resource('resumes','ResumeController');
	Route::resource('rewards','RewardController');
	Route::resource('users', 'UserController');
});

