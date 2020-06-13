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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// // Route::post('/sort','SortController@selectSort');
// Route::post('/sort',function(){
//     $MyArray = [1,2,3,4,5,6,7];
//     return $MyArray;
// });
