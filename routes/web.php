<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SliderController;

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

Route::get('/', [BookController::class, 'tampil'])->name('books.tampil');
Route::get('/books/{id}', [HomeController::class, 'show'])->name('show');
// Route::get('/', [sliderController::class, 'muncul'])->name('slider.muncul');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/books/index', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::post('/books/{id}/update', [BookController::class, 'update'])->name('books.update');
    Route::get('/books/{id}/destroy', [BookController::class, 'destroy'])->name('books.destroy');
    Route::get('books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/books/store', [BookController::class, 'store'])->name('books.store');

    Route::get('/exportpdf', [BookController::class, 'exportpdf'])->name('books.exportpdf');
    Route::get('/exportexcel', [BookController::class, 'exportexcel'])->name('books.exportexcel');

    Route::get('/slider/index', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/{id}/edit', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/{id}/update', [SliderController::class, 'update'])->name('slider.update');
    Route::get('/slider/{id}/destroy', [SliderController::class, 'destroy'])->name('slider.destroy');
    Route::get('slider/create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
});

Auth::routes();
?>
