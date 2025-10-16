<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ModuleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Authentification 
Route::post('/register', [AuthController::class, 'register']);

// Connexion
Route::post('/login', [AuthController::class, 'login']);





Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


