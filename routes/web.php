<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Models\Users;

Route::get('/', [HomeController::class, 'index']);

Route::get('/users', [UsersController::class, 'index']);

Route::get('/users/create', [UsersController::class, 'create']);

Route::post('/users', [UsersController::class, 'store']);

Route::get('/users/{id}', [UsersController::class, 'show']);

Route::get('/users/{id}/edit', [UsersController::class, 'edit']);

Route::put('/users/{id}', [UsersController::class, 'update']);

Route::delete('/users/{id}', [UsersController::class, 'destroy']);





