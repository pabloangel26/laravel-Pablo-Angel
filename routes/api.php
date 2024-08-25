<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::apiResource('clients', ClientController::class);
Route::apiResource('services', ServiceController::class);
Route::apiResource('equipment', EquipmentController::class);
Route::apiResource('projects', ProjectController::class);
// routes/api.php
Route::get('/items', [ItemController::class, 'index']);

