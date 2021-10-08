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
    //course
    route::get('/course', 'CourseController@getCourse');
    route::get('/createcourse', 'CourseController@getcreateCourse');
    route::post('/createcourse', 'CourseController@createCourse');

    //unit
    route::get('/unit', 'UnitController@getUnit');
    route::get('/createunit', 'UnitController@getcreateUnit');
    route::post('/createunit', 'UnitController@createUnit');

    //slide
    route::get('/slide', 'SlideController@getSlide');
    route::get('/createslide', 'SlideController@getcreateSlide');
    route::post('/createslide', 'SlideController@createSlide');

    //homework
    route::get('/homework', 'HomeworkController@getHomework');
    route::get('/createhomework', 'HomeworkController@getcreateHomework');
    route::post('/createhomework', 'HomeworkController@createHomework');

    //test
    route::get('/test', 'TestController@getTest');
    route::get('/createtest', 'TestController@getcreateTest');
    route::post('/createtest', 'TestController@createTest');



    route::get('/lienket', function(){
        $data=App\model\Unit::find(1)->zoom()->get();
        dd($data);
    });
    route::get('/lienket2', function(){
        $data=App\model\Course::find(1)->unit()->get();
        dd($data);
    });
});

// route::get('/exam','ExamController@getExam');
// route::get('/single/{id}','ExamController@getSingle');
// route::post('/exam','ExamController@postExam');
// route::get('/createexam','ExamController@createExam');
// route::post('/createexam','ExamController@postcreateExam');
