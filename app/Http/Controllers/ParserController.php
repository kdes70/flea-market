<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parsers\photodoska\Parser;

class ParserController extends Controller
{
    public function index()
    {
    	$parser = new Parser('https://photodoska.ru/tomsk');
    	$site = $parser->getResult();

    	header("Content-type:text/html; charset=utf-8");

    	dd($site);
    }
}
