<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\lesson;
use App\model\course;
use Illuminate\Support\Facades\Http;

class BackendController extends Controller
{
    public function getHome()
    {
        return view('pages.backend.home');
    }
    public function getLesson(){
        $lesson = lesson::query()->with('course')->get();
        $course = course::query()->latest()->get();
        return view ('pages.backend.lesson.main',compact('lesson','course'));
    }
    public function getcreateLesson(){
        $course = course::query()->latest()->get();
        return view('pages.backend.lesson.create',compact('course'));
    }
    public function createLesson(request $request){
        $lesson = lesson::create([
            'name'=>$request->name,
            'course_id'=>$request->course_id,
        ]);
        $lesson->course()->attach($request->course_id);
        return redirect('lesson');
    }
    public function addCourse(request $request, $id){
        $lesson = lesson::find($id)->course()->sync($request->course);
        return redirect('lesson');
    }
    public function addLecture(request $request, $id){
        $lesson = lesson::find($id)->course()->sync($request->course);
        return redirect('lesson');
    }
}
