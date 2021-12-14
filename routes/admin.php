<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('dashboard', 'admin::dashboard');

    Route::get('articles', [ArticleController::class, 'list'])->name('articles.list');
    Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::get('articles/show/{id}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('articles/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::post('articles/store', [ArticleController::class, 'store'])->name('articles.store');
    Route::put('articles/update/{id}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('articles/delete/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');

    Route::resource('categories', CategoryController::class);
});
