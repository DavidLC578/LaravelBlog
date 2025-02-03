<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);


// Views
Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index');

Route::middleware('auth')->group(function () {
    Route::get('/posts/create', [PostController::class, 'create'])
        ->name('posts.create');
});

Route::get("posts/{post}", [PostController::class, 'show'])
    ->name('posts.show');

Route::get('/register', [AuthController::class, 'registerView'])
    ->name('auth.registerView');
Route::get('/login', [AuthController::class, 'loginView'])
    ->name('login');

// Actions
Route::middleware('auth')->group(function () {
    Route::post('/posts', [PostController::class, 'store'])
        ->name('posts.store');
    Route::delete("/posts/{post}", [PostController::class, 'destroy'])
        ->name('posts.destroy');
});

Route::post('/register', [AuthController::class, 'register'])
    ->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])
    ->name('auth.login');
