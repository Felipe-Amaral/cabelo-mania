<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

Route::any('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard');
    Route::resource('articles', ArticleController::class);
    Route::resource('categories', CategoryController::class);
});
