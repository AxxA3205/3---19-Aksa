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
    return view('index', [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Mahija Danadyaksa Sadtomo",
        "email" => "4x4keren@gmail.com",
        "gambar" => "aksa.jpg",
        "cv" => "cv.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery',  [
        "title" => "Gallery",
        "cb" => "Cb Blackpink.jpg",
        "hotpot" => "hotpot.png",
        "Casing" => "Casing.jpg",
        "JOY" => "JOY.png",
        "poster" => "poster.png",
        "PHBS" => "PHBS.jpg",
        "lnp" => "lnp.png",
        "bp" => "bp.png"
    ]);
});

use App\Http\Controllers\ContactController;
Route::resource('/contacts', ContactController::class);

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();