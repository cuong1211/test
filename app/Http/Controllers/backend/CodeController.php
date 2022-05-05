<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Course;

class CodeController extends Controller
{
    public function getCode(){
        return view('exam');
    }
    public function postCode(Request $request){
        // dd($request->all());
        $code = $request->code;
        return view('exam');
    }
    
}