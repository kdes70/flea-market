<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use App\Http\Requests\AdsRequest;

class AdsController extends Controller
{

    //index
    public function index(){

        $ads = Ad::adsList();

        return view('ads.index', compact('ads'));
    }

    public function create(){

        $categories = Category::pluck('name', 'id');

        return view('ads.create')->with(compact('categories'));
    }

    public function store(AdsRequest $request)
    {
        $input = $request->all();

        $input['user_id'] = (\Auth::id()) ? \Auth::id() : '0';
        $input['confirm'] = true;
        $input['slug'] = str_slug($input['title']);
       // dd($input);
        // записываем объявление
        $ads = Ad::create($input);

        return redirect('/')->with('message', 'Ads successfully added!');
    }
}
