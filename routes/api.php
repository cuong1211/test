<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
route::group(['namespace' => 'backend'], function () {
    Route::get('/meetings', 'ZoomController@getList');
    Route::get('/zoom', 'ZoomController@getZoom');
    Route::get('/createmeetings', 'ZoomController@getCreate');
    Route::post('/createmeetings', 'ZoomController@postCreate');
    Route::get('/meetings/{id}', 'ZoomController@get')->where('id', '[0-9]+');
    Route::patch('/meetings/{id}', 'ZoomController@update')->where('id', '[0-9]+');
    Route::delete('/meetings/{id}', 'ZoomController@delete')->where('id', '[0-9]+');
    route::get('/test','BackendController@getStorage');
});
