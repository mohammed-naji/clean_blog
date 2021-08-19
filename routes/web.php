<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
