<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('layouts.template');
// });

// Route::get('/add', function () {
//     return view('add');
// });

Route::get('/', [ArticleController::class, 'show']);
Route::get('/detail/{id}', [ArticleController::class, 'detail']);

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);
Route::middleware(['auth'])->group(function(){
  Route::get('/admin', [ArticleController::class, 'show_by_admin'])->name('article');
  Route::get('/add', [ArticleController::class, 'add']);
  Route::post('/store', [ArticleController::class, 'store']);
  Route::get('/admin/edit/{id}', [ArticleController::class, 'edit']);
  Route::get('/admin/update/{id}', [ArticleController::class, 'update']);
  Route::get('/admin/delete/{id}', [ArticleController::class, 'destroy']);
});

