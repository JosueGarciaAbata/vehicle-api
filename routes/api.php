<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

// API RESTful endpoints for Vehicle entity
Route::apiResource('vehicles', VehicleController::class);