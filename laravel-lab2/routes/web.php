<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;


Route::get('/user/{username?}', function ($username = null) {
    $defaultName = 'Guest';

    if ($username && preg_match('/^[a-zA-Z]+$/', $username)) {
        $message = "Welcome, $username!";
    } elseif ($username) {
        $message = "Invalid username. Only alphabetic characters are allowed.";
    } else {
        $message = "Welcome, $defaultName!";
    }

    session(['username' => $username ?: $defaultName]);
    return view('blog', ['message' => $message]);
})->where('username', '[a-zA-Z]*');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/set-username', function () {
    $username = request('username');

    $rules = ['username' => 'nullable|regex:/^[a-zA-Z]+$/'];
    $messages = ['username.regex' => 'The username should contain only alphabetic characters.'];

    $validator = Validator::make(request()->all(), $rules, $messages);

    if ($validator->fails()) {
        return redirect()->route('welcome')->withErrors($validator)->withInput();
    }

    session(['username' => $username ?: 'Guest']);

    return redirect()->route('home');
})->name('set-username');


Route::get('/home', function () {
    $username = session('username');
    $message = "Welcome, " . ($username ?: 'Guest') . "!";
    
    return view('blog', ['message' => $message]);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
