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


route::get('/exam','ExamController@getExam');
route::post('/exam','ExamController@postExam');
route::get('/createexam','ExamController@createExam');
route::post('/createexam','ExamController@postcreateExam');