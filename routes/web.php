<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/projets', [PageController::class, 'projet'])->name('projets');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/a-propos', [PageController::class, 'about'])->name('about');
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.details');
