<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('v1/register', 'Api\Auth\RegisterController@register');
Route::post('v1/login', 'Api\Auth\LoginController@login');
Route::post('v1/refresh', 'Api\Auth\LoginController@refresh');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api', 'prefix' => 'v1'], function () {
    Route::post('v1/logout', 'Api\Auth\LoginController@logout');
});


Route::get('v1/ads', 'Api\AdsController@index');

// Category
Route::get('v1/category', 'Api\CategoryController@index');

