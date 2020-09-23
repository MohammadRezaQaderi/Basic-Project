<?php

use Illuminate\Support\Facades\Route;
the use App\Http\Controllers;


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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/' ,'App\Http\Controllers\StudentController@index');
Route::get('/edit/{id}' ,'App\Http\Controllers\StudentController@edit');
Route::get('/show/{id}' ,'App\Http\Controllers\StudentController@show');
Route::get('/create' ,'App\Http\Controllers\StudentController@create');
Route::post('/store' ,'App\Http\Controllers\StudentController@store');
Route::get('/update/{id}' ,'App\Http\Controllers\StudentController@update');

