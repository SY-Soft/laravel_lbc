<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::resource('products', ProductController::class);
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('products', ProductController::class);
});
Route::view('/', 'first');
