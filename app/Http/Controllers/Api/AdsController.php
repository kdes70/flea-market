<?php

namespace App\Http\Controllers\Api;

use App\Ad;

class AdsController extends ApiController
{
    //index
    public function index()
    {
        return Ad::all();
    }
}