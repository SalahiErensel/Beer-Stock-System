<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/beer",BeerController::class);