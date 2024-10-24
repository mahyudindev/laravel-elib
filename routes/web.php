<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman katalog buku
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Route untuk halaman detail buku
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
