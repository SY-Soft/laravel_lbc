<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::resource('products', ProductController::class);
// });
Route::view('/', 'first');
