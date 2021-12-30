<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

//Guest
Route::get('/', [GuestController::class, 'index'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/view', [GuestController::class, 'view']);

//User
Route::get('/user', [UserController::class, 'index'])->middleware('auth');
Route::get('/user/view', [UserController::class, 'view'])->middleware('auth');
Route::get('/user/profile', [UserController::class, 'profile'])->middleware('auth');
Route::get('/user/profile/update', [UserController::class, 'updatePage'])->middleware('auth');
Route::post('/user/profile/update', [UserController::class, 'updateProfile']);

//Admin
Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/admin/view', [AdminController::class, 'view'])->middleware('admin');
Route::get('/admin/profile', [AdminController::class, 'profile'])->middleware('admin');
Route::get('/admin/profile/update', [AdminController::class, 'updatePage'])->middleware('admin');
Route::post('/admin/profile/update', [AdminController::class, 'updateProfile']);
Route::get('/admin/addItem', [AdminController::class, 'viewAddItem'])->middleware('admin');
Route::post('/addItem', [AdminController::class, 'addItem']);
