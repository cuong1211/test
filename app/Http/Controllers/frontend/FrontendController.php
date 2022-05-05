<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Lesson;
use App\model\Zoom;
use App\model\Unit;
Use App\model\Quiz;

class FrontendController extends Controller
{
    public function getHome(){
        return view('pages.frontend.home');
    }
    public function getUnit($id){
        $unit = Unit::find($id);
        $zoom = Zoom::query()->get();
        $quizzes = Quiz::all();
        return view('pages.frontend.unit',compact('unit','zoom','quizzes'));
        
    }
    public function getLesson(){
        $unit = Unit::query()->get();
        
        return view('pages.frontend.lesson',compact('unit'));
    }
    public function getQuiz(Quiz $quiz){
        return view('pages.frontend.quiz',compact('quiz'));
    }
}
