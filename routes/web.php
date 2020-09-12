<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/capacitacion', function () {
    return view('questions');
});
/*
Route::get('/capacitacion', function () {
    return view('video');
});
*/
Route::get('/resultado', function () {
    return view('results');
});

Route::get('/download-data', function () {
    return view('download');
});

Route::post('/capacitacion','UserController@startSession');
Route::post('/resultado','EvaluationController@saveData');