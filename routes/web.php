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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard/detail/{city}', function ($city) {
    return view('dashboard-detail',['city'=>$city]);
})->name('dashboard-detail');


Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

Route::get('/input-data', function () {
    return view('input-data');
})->name('input-data');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/keadaan-opt', function () {
    return view('keadaan-opt');
})->name('keadaan-opt');

Route::get('/data-petugas', function () {
    return view('data-petugas');
})->name('data-petugas');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

Route::get('/chart', function () {
    return view('charts-morris');
});
