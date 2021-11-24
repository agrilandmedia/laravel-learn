<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Post Controller actions
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('categories/{category:slug}', [PostController::class, 'showAllPostsByCategory'])->name('category');
Route::get('authors/{author:name}', [PostController::class, 'showAllPostsByAuthor']);