<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Doctor\DoctorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::resource('user', UserController::class);

        Route::resource('doctor',DoctorController::class);
        Route::post('/logout', [AuthController::class, 'logout']);
    });
});
