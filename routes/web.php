<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products/home', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/dashboard', [ProductController::class, 'admin'])->name('products.dashboard');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/create', [ProductController::class, 'store']);
Route::get('/products/del/{id}', [ProductController::class, 'delete']);

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::post('/orders/create', [OrderController::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
