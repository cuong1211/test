<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function getHomework(){
        return view('pages.backend.homework.main');
    }
    public function getCreateHomework(){
        return view('pages.backend.homework.create');
    }
    public function createHomework(request $request){
        return redirect('homework');
    }
    public function getEditHomework($id){
        return view('pages.backend.homework.edit');
    }
    public function editHomework(request $request,$id){
        return redirect('homework');
    }
    public function deleteHomework($id){
        return redirect('homework');
    }
    
}
