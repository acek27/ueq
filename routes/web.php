<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuesionerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RespondenController;
use App\Http\Controllers\AdminController;

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
Route::get('/tentang', [App\Http\Controllers\IndexController::class, 'tentang'])->name('tentang');
Route::get('/contoh', [App\Http\Controllers\IndexController::class, 'contoh'])->name('contoh');

Auth::routes();

Route::get('/home/data', [App\Http\Controllers\HomeController::class, 'anyData'])->name('responden.data');
Route::get('/unfinished/data', [App\Http\Controllers\HomeController::class, 'unfinished'])->name('unfinished.data');
Route::get('/unfinished/', [App\Http\Controllers\HomeController::class, 'show'])->name('unfinished.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/getitem/{id}', [App\Http\Controllers\KuesionerController::class, 'getItem'])->name('getitem');
Route::post('/feature/', [App\Http\Controllers\KuesionerController::class, 'feature'])->name('feature.submit');
Route::post('/deletefeature/', [App\Http\Controllers\KuesionerController::class, 'deletefeature'])->name('feature.delete');
Route::resource('kuesioner', KuesionerController::class);
Route::resource('responden', RespondenController::class);
Route::resource('admin', AdminController::class);
