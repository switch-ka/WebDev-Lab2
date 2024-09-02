<?php

use Illuminate\Support\Facades\Route;

// Route for the main page
Route::get('/', function () {
    return view('blog');
})->name('blog');

