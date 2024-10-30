<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);
Route::post('/', [BlogController::class, 'create']);
Route::get('/about/{id}', [BlogController::class, 'show']);
