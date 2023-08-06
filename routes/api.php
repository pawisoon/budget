<?php

use Illuminate\Http\Request;

Route::get('/currencies', \App\Http\Controllers\Api\CurrencyController::class);
