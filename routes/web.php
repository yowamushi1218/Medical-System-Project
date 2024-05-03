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
})->name('register');

//Login
Route::get('/login', function () {
    return view('login');
})->name('login');

//Forgot-Password
Route::get('/forgot-pasword', function () {
    return view('forgot-password');
})->name('forgot-password');
