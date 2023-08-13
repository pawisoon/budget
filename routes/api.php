<?php

use App\Http\Controllers\Api\CurrencyController;
use App\Http\Controllers\Api\LogInController;

Route::post('/log-in', LogInController::class);

Route::get('/currencies', CurrencyController::class);
