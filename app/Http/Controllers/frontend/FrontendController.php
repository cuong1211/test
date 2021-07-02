<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\lesson;

class FrontendController extends Controller
{
    public function getHome(){
        return view('pages.frontend.home');
    }
    public function getUnit($id){
        $lesson = lesson::find($id);
        return view('pages.frontend.unit');
    }
    public function getLesson(){
        $lesson = lesson::query()->get();
        return view('pages.frontend.lesson',compact('lesson'));
    }
}
