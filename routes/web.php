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
<<<<<<< HEAD
    return view('guesthome');
});

Route::get('/user', function () {
    return view('userhome');
=======
    return view('register');
>>>>>>> e82dd0e4c44bdd67f73ddafbe6eb61087d8258f1
});
