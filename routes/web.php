<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    PostController,
    AccountController,
    IndexController,
    LoginController,
    AdminPostController,
    AdminAccountController
};

Route::get('/', [IndexController::class, 'index']);

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/{post:slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
    Route::post('/admin/login', [LoginController::class, 'authenticate']);
});

Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('posts', AdminPostController::class);

    Route::middleware('is_admin')->group(function () {
        Route::resource('account', AdminAccountController::class)->except('show');
    });
});
