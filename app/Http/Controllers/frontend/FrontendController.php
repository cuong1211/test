<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Lesson;
use App\model\Zoom;

class FrontendController extends Controller
{
    public function getHome(){
        return view('pages.frontend.home');
    }
    public function getUnit($id){
        $lesson = json_decode(Lesson::with('zoom')->get());
        // foreach($lesson as $item=>$lesson){
        //     $a = json_decode($lesson::find($id),true);
        //     $b = json_decode($lesson['zoom']::find($id),true);
        // }
        dd($lesson);
        // dd($a);
        return view('pages.frontend.unit',compact('a','b'));
    }
    public function getLesson(){
        $lesson = Lesson::query()->get();
        return view('pages.frontend.lesson',compact('lesson'));
    }
}
