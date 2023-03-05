<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;

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


Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');
    
    Route::get('/books/index', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::post('/books/{id}/update', [BookController::class, 'update'])->name('books.update');
    Route::get('/books/{id}/destroy', [BookController::class, 'destroy'])->name('books.destroy');
    Route::get('books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
});

Auth::routes();