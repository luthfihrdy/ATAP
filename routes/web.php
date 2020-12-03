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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

//create
Route::get('/add', [App\Http\Controllers\ArtikelController::class, 'add'])->name('add');
//route untuk simpan data 
Route::post('/adds', [App\Http\Controllers\ArtikelController::class, 'createArtikel'])->name('create');

//update
Route::get('/edit/{artikel}', [App\Http\Controllers\ArtikelController::class, 'edit'])->name('edit');
Route::get('/profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('profile');

Route::get('/delete/{id_artikel}', [App\Http\Controllers\ArtikelController::class, 'deleteRecord'])->name('delete');