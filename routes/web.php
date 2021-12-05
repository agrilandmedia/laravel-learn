<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

// Post Controller
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('categories/{category:slug}', [PostController::class, 'showAllPostsByCategory'])->name('category');
Route::get('authors/{author:name}', [PostController::class, 'showAllPostsByAuthor']);

// Admin Post Controller
Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('admin');
Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin');
Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('admin');
Route::get('admin/posts/create', [AdminPostController::class, 'createPost'])->middleware('admin');
Route::post('admin/posts/store', [AdminPostController::class, 'storePost'])->middleware('admin');

// Registration Controller
Route::get('register', [RegistrationController::class, 'create'])->middleware('guest');
Route::post('register', [RegistrationController::class, 'store'])->middleware('guest');

// Session Controller
Route::get('login', [SessionController::class, 'getLogInPage'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionController::class, 'logOut'])->middleware('auth');

// Comments Controller
Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store']);