<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

    
Route::get('/', function () {
    return view('blog');
})->name('blog');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
