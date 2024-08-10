<?php

use App\Http\Controllers\API\V1\TickectController;
use App\Http\Controllers\AuthController;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/tickets', TickectController::class);
