<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminUserController;
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
Route::middleware('can:admin')->group(function () {
    // Posts
    Route::get('admin/posts', [AdminPostController::class, 'index']);
    Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
    Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
    Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);
    Route::get('admin/posts/create', [AdminPostController::class, 'createPost']);
    Route::post('admin/posts/store', [AdminPostController::class, 'storePost']);
    // Users
    Route::get('admin/users', [AdminUserController::class, 'index']);
    Route::get('admin/users/{user}/edit', [AdminUserController::class, 'edit']);
    Route::patch('admin/users/{user}', [AdminUserController::class, 'update']);
});

// Registration Controller
Route::get('register', [RegistrationController::class, 'create'])->middleware('guest');
Route::post('register', [RegistrationController::class, 'store'])->middleware('guest');

// Session Controller
Route::get('login', [SessionController::class, 'getLogInPage'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionController::class, 'logOut'])->middleware('auth');

// Comments Controller
Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store']);