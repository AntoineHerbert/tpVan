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
    return view('formAnnees');
});
Route::post('/',function(){
    return \App\Http\Controllers\CalculeController::displayForm();
});
Route::post('/resultat',function(){
    return \App\Http\Controllers\CalculeController::calcule();
});
