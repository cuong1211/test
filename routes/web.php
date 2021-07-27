<?php

use Illuminate\Support\Facades\Route;
use app\model\course;

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
    route::get('/admin', 'LessonController@getHome');
    //lesson
    route::get('/lesson', 'LessonController@getLesson');
    route::get('/createlesson', 'LessonController@getcreateLesson');
    route::post('/createlesson', 'LessonController@createLesson');
    route::post('/addcourse/{id}', 'LessonController@addCourse');  
    route::post('/addlesson/{id}', 'LessonController@addLesson');
     
    //unit
    route::get('/unit', 'UnitController@getUnit');
    route::get('/createunit', 'UnitController@getcreateUnit');
    route::post('/createunit', 'UnitController@createUnit');
    route::post('/addcourse/{id}', 'UnitController@addCourse');  
    route::post('/addlesson/{id}', 'UnitController@addLesson');

    //h5p
    route::get('/h5p', 'H5pController@getH5p');
    route::get('/createh5p', 'H5pController@getcreateH5p');
    route::post('/createh5p', 'H5pController@createH5p');
    route::post('/addcourse/{id}', 'H5pController@addCourse');  
    route::post('/addlesson/{id}', 'H5pController@addLesson');

    //homework
    route::get('/homework', 'HomeworkController@getHomework');
    route::get('/createhomework', 'HomeworkController@getcreateHomework');
    route::post('/createhomework', 'HomeworkController@createHomework');
    route::post('/addcourse/{id}', 'HomeworkController@addCourse');  
    route::post('/addlesson/{id}', 'HomeworkController@addLesson');

    //test
    route::get('/test', 'TestController@getTest');
    route::get('/createtest', 'TestController@getcreateTest');
    route::post('/createtest', 'TestController@createTest');
    route::post('/addcourse/{id}', 'TestController@addCourse');  
    route::post('/addlesson/{id}', 'TestController@addLesson');


    
    route::get('/lienket', function(){
        $data=App\model\Unit::find(1)->zoom()->get();
        dd($data);
    }); 
    route::get('/lienket2', function(){
        $data=App\model\Zoom::find(1)->unit()->get();
        dd($data);
    });  
});

// route::get('/exam','ExamController@getExam');
// route::get('/single/{id}','ExamController@getSingle');
// route::post('/exam','ExamController@postExam');
// route::get('/createexam','ExamController@createExam');
// route::post('/createexam','ExamController@postcreateExam');