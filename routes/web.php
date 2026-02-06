<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::resource('products', ProductController::class);
// });
Route::view('/', 'first');
