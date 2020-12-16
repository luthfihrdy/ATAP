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

Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\UserController::class, 'about'])->name('about');
Route::get('/articles', [App\Http\Controllers\UserController::class, 'articles'])->name('articles');
Route::get('/article/{artikel}', [App\Http\Controllers\UserController::class, 'article'])->name('data');
Route::get('/search', [App\Http\Controllers\UserController::class, 'search'])->name('search');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

//Route Artikel & export excel
Route::get('/artikel', [App\Http\Controllers\ArtikelController::class, 'index'])->name('artikel')->middleware('auth');
Route::get('/artikel/export_excel', [App\Http\Controllers\ArtikelController::class, 'export_excel'])->middleware('auth');
Route::get('/artikel/export_pdf', [App\Http\Controllers\ArtikelController::class, 'export_pdf'])->middleware('auth');

Route::get('/artikel/search', [App\Http\Controllers\ArtikelController::class, 'search'])->name('searchArtikel')->middleware('auth');

Route::get('/profile/{userid}', [App\Http\Controllers\DashboardController::class, 'profile'])->name('profile');
//panggil graph
Route::get('/graph', [App\Http\Controllers\GraphController::class, 'index'])->name('graph');

//create
Route::get('/add', [App\Http\Controllers\ArtikelController::class, 'add'])->name('add');
//route untuk simpan data 
Route::post('/adds', [App\Http\Controllers\ArtikelController::class, 'createArtikel'])->name('create')->middleware('auth');

//update
Route::get('/edit/{artikel}', [App\Http\Controllers\ArtikelController::class, 'edit'])->name('edit')->middleware('auth');;
//eksekusi update
Route::put('/edits/{artikel}', [App\Http\Controllers\ArtikelController::class, 'update'])->name('update');

Route::delete('/delete/{artikel}', [App\Http\Controllers\ArtikelController::class, 'delete'])->name('delete')->middleware('auth');

