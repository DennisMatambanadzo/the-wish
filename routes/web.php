<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);


Route::get('/articles',[HomeController::class,'indexBlogs']);


Route::get('/chime',[UserController::class,'show'])->middleware('auth');

Route::get('/chime/login',[UserController::class,'login'])->name('login');
Route::get('/chime/register',[UserController::class,'register']);
Route::post('/chime/users',[UserController::class,'store']);
Route::post('/chime/authenticate',[UserController::class,'authenticate']);