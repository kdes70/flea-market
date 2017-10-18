<?php

namespace App\Http\Controllers\Api;


use App\Category;

class CategoryController extends ApiController
{
    //index
    public function index()
    {
        return Category::all();
    }
}