<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RespondenController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::resource('/', IndexController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/getitem/{id}', [App\Http\Controllers\KuesionerController::class, 'getItem'])->name('getitem');
Route::resource('kuesioner', KuesionerController::class);
Route::resource('responden', RespondenController::class);
