<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\LoyatylevelsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RentailController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('brands', BrandController::class);
Route::apiResource('cars', CarController::class);
Route::apiResource('drivers', DriverController::class);
Route::apiResource('loyalty-levels', LoyatylevelsController::class);
Route::apiResource('users', UserController::class);
Route::apiResource('payments', PaymentController::class);
Route::apiResource('rentails', RentailController::class);