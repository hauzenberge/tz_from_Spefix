<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

/*
Route::get('/', function () {
    return view('welcome');
});

*/
Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');