<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $books = Book::all();
    return view('front.homepage', ['books' => $books]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function() {
    return view('layouts.admin');
});

Route::middleware(['admin'])->group(function() {
    Route::get('/admin', function() {return view('layouts.admin');});
    Route::get('/admin/books/index', [BookController::class, 'index'])->name('books.index');
    Route::get('/admin/books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/admin/books/store', [BookController::class, 'store'])->name('books.store');
    Route::post('/admin/books/destroy/{id}', [BookController::class, 'destroy'])->name('books.destroy');

    Route::get('/admin/users/index', [UserController::class, 'index'])->name('users.index');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/admin/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/admin/users/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::post('/admin/users/insert', [UserController::class, 'insert'])->name('users.insert');
});