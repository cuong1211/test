<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Lesson;
use App\model\Zoom;
use App\model\Unit;

class FrontendController extends Controller
{
    public function getHome(){
        return view('pages.frontend.home');
    }
    public function getUnit($id){
        $unit = Unit::find($id);
        $zoom = Zoom::query()->get();
        return view('pages.frontend.unit',compact('unit','zoom'));
    }
    public function getLesson(){
        $unit = Unit::query()->get();
        return view('pages.frontend.lesson',compact('unit'));
    }
}
