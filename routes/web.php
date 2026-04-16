<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/nosoffres', function () {
    return view('nosoffres');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/apropos', function () {
    return view('apropos');
});



