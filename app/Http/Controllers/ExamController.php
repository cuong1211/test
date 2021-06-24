<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\exam;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function getExam()
    {   
        $y = exam::query()->get();
        return view('exam', compact('y'));
    }
    public function getSingle($id)
    {   
        $y= exam::find($id);
        return view('single', compact('y'));
    }
    public function postExam(Request $request)
    {
        $input = $request->input('code');
        $answer =  json_decode(exam::get('answer'),true);
        $x = $answer[0]['answer'];
        if($input == $x){
            echo 'dung';
        }else{
            echo 'sai';
        }
    }
    public function createExam()
    {
        return view('createexam');
    }
    public function postcreateExam()
    {
        
    }
}
