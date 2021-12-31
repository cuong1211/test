<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\model\Course;
use Illuminate\Http\Request;
use App\model\Unit;
use App\model\Slide;
use App\model\Zoom;
use App\model\Quiz;
class UnitController extends Controller
{
    public function getUnit(){
        $unit = Unit::query()->with('course','zoom','slide')->get();
        $course = Course::query()->get();
        $zoom = Zoom::query()->get();
        $slide = Slide::query()->get();
        return view('pages.backend.unit.main',compact('unit','course','zoom','slide'));
    }
    public function getcreateUnit(){
        $course = Course::query()->get();
        $zoom = Zoom::query()->get();
        $slide = Slide::query()->get();
        $quiz= Quiz::query()->get();
        return view('pages.backend.unit.create',compact('course','zoom','slide','quiz'));
    }
    public function createUnit(request $request){
        $unit = Unit::create([
            'title'=>$request->title,
            'course_id'=>$request->course_id,
            'zoom_id'=>$request->zoom_id,
            'slide_id'=>$request->slide_id,
            'quizzes_id'=>$request->quizzes_id,
        ]);
        return redirect('unit');
    }
}
