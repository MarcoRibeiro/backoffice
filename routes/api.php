<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\FaultController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::apiResource('clients', ClientController::class);
    Route::apiResource('equipment', EquipmentController::class);
    Route::apiResource('faults', FaultController::class);
    Route::apiResource('statuses', StatusController::class);
    Route::apiResource('stocks', StockController::class);
    Route::apiResource('users', UserController::class);
    Route::post('me', [AuthController::class, 'me']);
});
