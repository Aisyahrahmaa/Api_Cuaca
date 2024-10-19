<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// route
Route::apiResource('/Cuaca', App\Http\Controllers\Api\CuacasController::class);
Route::apiResource('/Kota', App\Http\Controllers\Api\KotasController::class);
