<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');
Route::post('/posts/create', [PostController::class, 'store'])->middleware('auth');
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('/posts/{post:slug}', [CommentController::class, 'create']);
Route::get('/register', [UserController::class, 'show']);
Route::post('/register', [UserController::class, 'store']);
Route::get('/login', [SessionController::class, 'show'])->name('login');
Route::post('/login', [SessionController::class, 'create']);
Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth');


