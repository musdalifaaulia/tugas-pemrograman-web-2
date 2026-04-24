<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KostController;

Route::get('/kosts', [KostController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});