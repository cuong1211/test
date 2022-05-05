<?php

use Illuminate\Support\Facades\Route;
use app\model\course;
use Illuminate\Support\Facades\Auth;
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
    route::get('/quiz/{quiz}','FrontendController@getQuiz');
});


route::group(['namespace' => 'backend'], function () {
    route::get('/admin');
    //course
    route::get('/course', 'CourseController@getCourse');
    route::get('/createcourse', 'CourseController@getcreateCourse');
    route::post('/createcourse', 'CourseController@createCourse');

    //unit
    route::get('/unit', 'UnitController@getUnit');
    route::get('/createunit', 'UnitController@getcreateUnit');
    route::post('/createunit', 'UnitController@createUnit');
    route::get('/editunit/{id}', 'UnitController@getEditUnit');
    route::post('/editunit/{id}', 'UnitController@editUnit');
    route::get('/deleteunit/{id}', 'UnitController@deleteUnit');
    

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
    route::get('/createtest', 'TestController@createTest');
    route::post('/createtest', 'TestController@postcreateTest');
    route::get('/detal/{quiz}','TestController@detalTest');
    route::post('/result/{quiz}','TestController@resultTest');

    //code
    route::get('/code', 'CodeController@getCode');
    route::get('/createcode', 'CodeController@detailCode');
    route::post('/createcode', 'CodeController@postCode');

    route::get('/lienket', function(){
        $data=App\model\Question::find(2)->Quiz()->get();
        dd($data);
    });
    route::get('/lienket2', function(){
        $data=App\model\CorrectAnswer::find(1)->Answer()->get();
        dd($data);
    });
});

// route::get('/exam','ExamController@getExam');
// route::get('/single/{id}','ExamController@getSingle');
// route::post('/exam','ExamController@postExam');
// route::get('/createexam','ExamController@createExam');
// route::post('/createexam','ExamController@postcreateExam');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
