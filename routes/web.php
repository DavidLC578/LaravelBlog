<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::middleware('auth')->group(function () {
    Route::get('/posts/edit/{post}', [PostController::class, 'edit'])
        ->name('posts.edit');
});

Route::get('/register', [AuthController::class, 'registerView'])
    ->name('auth.registerView');
Route::get('/login', [AuthController::class, 'loginView'])
    ->name('login');

// Admin
Route::get('/admin/dashboard', [DashboardController::class, 'dashboardView'])
    ->middleware('can:admin.dashboard')
    ->name('admin.dashboard');

Route::delete('/admin/posts/{post}', [PostController::class, 'destroy'])
    ->name('admin.post.destroy');
Route::get("/admin/users/{user}", [DashboardController::class, 'editRoleView'])
    ->name('admin.user.roleView');

Route::delete('/admin/users/{user}', [DashboardController::class, 'destroyUser'])
    ->name('admin.user.destroy');
Route::put('/admin/users/{user}', [DashboardController::class, 'editRole'])
    ->name('admin.user.editRole');

// Actions
Route::middleware('auth')->group(function () {
    Route::post('/posts', [PostController::class, 'store'])
        ->name('posts.store');
    Route::delete("/posts/post/{post}", [PostController::class, 'destroy'])
        ->name('posts.destroy');
    Route::put("/posts/edit/{post}", [PostController::class, 'update'])
        ->name('posts.update');
    Route::get('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});

Route::post('/register', [AuthController::class, 'register'])
    ->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])
    ->name('auth.login');
