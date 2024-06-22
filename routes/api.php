<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route for register and login
Route::post('register',[AuthController::class, 'register']);
Route::post('login',[AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::post('refreshtoken', [AuthController::class, 'refreshToken']);
    Route::post('logout',[AuthController::class, 'logout']);
    
});
