<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('dashboard', 'admin::dashboard');

    Route::resource('articles', ArticleController::class);
    Route::put('article/changevisibility/{id}', [ArticleController::class, 'changeArticleVisibility'])
        ->name('article.changevisibility');
    Route::resource('categories', CategoryController::class);
});
