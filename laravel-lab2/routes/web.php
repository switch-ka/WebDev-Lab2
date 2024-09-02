<?php

use Illuminate\Support\Facades\Route;

// Route for the main page
Route::get('/', function () {
    return view('blog');
})->name('home');

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');