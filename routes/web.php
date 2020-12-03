<?php

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/artikel', [App\Http\Controllers\ArtikelController::class, 'index'])->name('artikel');

//create
Route::get('/add', [App\Http\Controllers\ArtikelController::class, 'add'])->name('add');
//route untuk simpan data 
Route::post('/adds', [App\Http\Controllers\ArtikelController::class, 'createArtikel'])->name('create')->middleware('auth');;

//update
Route::get('/edit/{artikel}', [App\Http\Controllers\ArtikelController::class, 'edit'])->name('edit')->middleware('auth');;
//eksekusi update
Route::put('/edits/{artikel}', [App\Http\Controllers\ArtikelController::class, 'update'])->name('update');

Route::delete('/delete/{artikel}', [App\Http\Controllers\ArtikelController::class, 'delete'])->name('delete')->middleware('auth');

