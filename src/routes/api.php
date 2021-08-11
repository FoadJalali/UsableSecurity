<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->prefix('v1')->group(function(){

    Route::post('/login', 'AuthController@login');
    Route::put('/refresh', 'AuthController@refresh');
    Route::middleware(['jwt.auth'])->group(function(){
        Route::get('/departments', 'DepartmentController@index');
        Route::get('/positions', 'PositionController@index');
        Route::get('/jobs', 'JobController@index');
        Route::get('/persons', 'PersonController@index');
        Route::get('/employments','EmploymentController@index');
        Route::get('/rewards', 'RewardController@index');
        Route::get('/resumes', 'ResumeController@index');
        Route::get('/educationals', 'EducationalController@index');
        Route::get('/courses', 'CourseController@index');
    });
    
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
