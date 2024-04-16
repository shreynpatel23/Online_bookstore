<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
    Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
    Route::get('/authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
    Route::post('/authors/{author}/update', [AuthorController::class, 'update'])->name('authors.update');
    Route::get('/authors/{author}/trash', [AuthorController::class, 'trash'])->name('authors.trash');
    Route::delete('/authors/{author}/destroy', [AuthorController::class, 'destroy'])->name('authors.destroy');
    Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('authors.show');


    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/books', [BookController::class, 'store'])->name('books.store');
    Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::post('/books/{book}/update', [BookController::class, 'update'])->name('books.update');
    Route::get('/books/{book}/trash', [BookController::class, 'trash'])->name('books.trash');
    Route::delete('/books/{book}/destroy', [BookController::class, 'destroy'])->name('books.destroy');
});
