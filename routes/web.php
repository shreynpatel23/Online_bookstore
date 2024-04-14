<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/authors/trash/{id}', [AuthorController::class, 'AuthorController@trash'])->name('authors.trash');
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
Route::post('/authors/{author}/update', [AuthorController::class, 'update'])->name('authors.update');
Route::get('/authors/{author}/trash', [AuthorController::class, 'trash'])->name('authors.trash');
Route::delete('/authors/{author}/destroy', [AuthorController::class, 'destroy'])->name('authors.destroy');
