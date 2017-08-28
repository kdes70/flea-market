<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{

    //index
    public function index(){
        return view('ads.index');
    }
}
