<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website::index');
})->name('index');

Route::get('/cabelo-mania', function () {
    return view('website::cabelo-mania');
})->name('cabelo-mania');

Route::get('/primeiro-corte', function () {
    return view('website::first-cut');
})->name('first-cut');

Route::get('/servicos', function () {
    return view('website::services');
})->name('services');

Route::get('/contato', function () {
    return view('website::contact-us');
})->name('contact-us');
