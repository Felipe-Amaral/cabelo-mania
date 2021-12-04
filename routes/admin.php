<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('dashboard', 'admin::dashboard');
    Route::resource('articles', ArticleController::class);
    Route::resource('categories', CategoryController::class);
});
