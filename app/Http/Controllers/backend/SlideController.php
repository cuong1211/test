<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Slide;
use Illuminate\Support\Facades\Aut;

class SlideController extends Controller
{
    public function getSlide(){
        $slide = Slide::query()->get();
        return view('pages.backend.slide.main',compact('slide'));
    }
    public function getcreateSlide(){
        return view('pages.backend.slide.create');
    }
    public function createSlide(request $request){
        $slide = Slide::create([
            'title'=>$request->title,
            'link'=>$request->link,
        ]);
        return redirect('slide');
    }
    public function getEditSlide($id){
        $slide = Slide::query()->find($id);
        return view('pages.backend.slide.edit',compact('slide'));
    }
    public function editSlide(request $request,$id){
        $slide = Slide::query()->find($id);
        $slide->update([
            'title'=>$request->title,
            'link'=>$request->link,
        ]);
        return redirect('slide');
    }
    public function deleteSlide($id){
        $slide = Slide::query()->find($id);
        $slide->delete();
        return redirect('slide');
    }
}
