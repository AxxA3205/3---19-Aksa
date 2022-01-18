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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Mahija Danadyaksa Sadtomo",
        "email" => "4x4keren@gmail.com",
        "gambar" => "axxa.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery');
});