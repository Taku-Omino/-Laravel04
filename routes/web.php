<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

/*
Route::get('/', [HomeController::class, 'top'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
*/

Route::get('/', [HomeController::class, 'top'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::resource('books', BookController::class);






