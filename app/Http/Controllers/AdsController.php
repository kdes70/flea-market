<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Http\Request;

class AdsController extends Controller
{

    //index
    public function index(){

        $ads = Ad::adsList()->get();

        return view('ads.index', compact('ads'));
    }
}
