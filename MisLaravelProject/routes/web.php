<?php

use App\Http\Middleware\IsValid;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductsController::class, 'index']);

Route::get('/products', [ProductsController::class, 'review']);
Route::delete('/delete/{product:id}', [ProductsController::class, 'destroy']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/signin', [AuthController::class, 'signin']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/signup', [AuthController::class, 'signup']);

