<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Course;

class CourseController extends Controller
{
    public function getCourse(){
        $course = Course::query()->get();
        return view('pages.backend.course.main',compact('course'));
    }
    public function getcreateCourse(){
        return view('pages.backend.course.create');
    }
    public function createCourse(request $request){
        $course = Course::create([
            'name'=>$request->name,
            'start_time'=>$request->start_time,
        ]);
        return redirect('course');
    }
}
