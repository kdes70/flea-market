<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'AdsController@index');
//
//// ADS
//Route::get('/add', 'AdsController@create');
//Route::post('/add', 'AdsController@store');
//Route::get('/parser', 'ParserController@index');
//
Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
