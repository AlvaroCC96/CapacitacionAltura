<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataExportController;
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


Route::get('/download-data', function () {
    return view('download');
});

Route::post('/capacitacion','UserController@startSession');
Route::post('/capacitacion1','UserController@videoData');
Route::post('/resultado','EvaluationController@saveData');

Route::post('/data1','EvaluationController@dbexcel');

//  Route for export data
Route::get('/exportar', function() {
    return (new DataExportController)->download('data.xlsx');
});
