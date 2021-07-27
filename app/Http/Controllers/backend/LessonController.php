<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Lesson;
use App\model\Course;
use Illuminate\Support\Facades\Http;

class LessonController extends Controller
{
    public function getHome()
    {
        return view('pages.backend.home');
    }
    public function getLesson(){
        $lesson = Lesson::query()->with('course')->get();
        $course = Course::query()->latest()->get();
        return view ('pages.backend.lesson.main',compact('lesson','course'));
    }
    public function getcreateLesson(){
        $course = Course::query()->latest()->get();
        return view('pages.backend.lesson.create',compact('course'));
    }
    public function createLesson(request $request){
        $lesson = Lesson::create([
            'name'=>$request->name,
            'course_id'=>$request->course_id,
        ]);
        return redirect('lesson');
    }
    public function addCourse(request $request, $id){
        $lesson = Lesson::find($id)->course()->sync($request->course);
        return redirect('lesson');
    }
   
}
