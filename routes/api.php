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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::apiResource('animal', 'AnimalController');
// Route::apiResource('type', 'TypeController');

// 這裡可以用 like 辨識
// Route::post('animal/{animal}/like', 'AnimalController@like');

Route::post('/sort','SortController@selectSort');

Route::post('/findmax','SortController@findMax');
// Route::post('/findmax',function(){
//     $MyArray = [1,2,3,4,5,6,7];
//     return $MyArray;
// });