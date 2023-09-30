<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DowntubeController extends Controller
{
    public function index(){
        return view('downtube-pt');
    }

    public function receiveUrl(){}
    
}
