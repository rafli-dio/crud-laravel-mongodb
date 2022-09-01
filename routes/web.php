<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create'])->name('create-post');
Route::post('/save',[PostController::class, 'store'])->name('save-post');
Route::get('/delete/{id}',[PostController::class, 'destroy'])->name('delete-post');
Route::get('/edit/{id}',[PostController::class,'edit'])->name('edit-post');
Route::patch('/update/{id}',[PostController::class,'update'])->name('update-post');