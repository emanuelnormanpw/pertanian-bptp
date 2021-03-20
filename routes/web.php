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
})->name('landing');

Route::get('/preview-data', function () {
    return view('preview-data');
})->name('preview-data');

Route::get('/overview', function () {
    return view('index');
})->name('overview');

Route::get('/input-data', function () {
    return view('input-data');
})->name('input-data');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/other', function () {
    return view('ui-pagination');
})->name('laporan');