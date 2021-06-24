<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\zoom;
use Illuminate\Support\Facades\Http;

class BackendController extends Controller
{
    public function getHome()
    {
        return view('pages.backend.home');
    }
    
}
