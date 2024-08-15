<?php

use App\Http\Controllers\API\V1\TickectController;
use App\Http\Controllers\API\V1\UserController;
use App\Http\Controllers\AuthController;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->apiResource('/tickets', TickectController::class);
Route::middleware(['auth:sanctum'])->apiResource('/users', UserController::class);
