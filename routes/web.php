<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'frontend'], function () {
    Route::get('/home', 'FrontendController@getHome');
    Route::get('/unit/{id}', 'FrontendController@getUnit');
    route::get('/lecture','FrontendController@getLesson');
    
});


route::group(['namespace' => 'backend'], function () {
    route::get('/admin', 'BackendController@getHome');
    route::get('/lesson', 'BackendController@getLesson');
    route::get('/createlesson', 'BackendController@getcreateLesson');
    route::post('/createlesson', 'BackendController@createLesson');
    route::post('/addcourse/{id}', 'BackendController@addCourse');
    route::post('/addlecture/{id}', 'BackendController@addCourse');

    
});


// route::get('/exam','ExamController@getExam');
// route::get('/single/{id}','ExamController@getSingle');
// route::post('/exam','ExamController@postExam');
// route::get('/createexam','ExamController@createExam');
// route::post('/createexam','ExamController@postcreateExam');