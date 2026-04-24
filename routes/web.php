<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KostController;

Route::get('/kost', [KostController::class, 'index']);
Route::get('/kost/create', [KostController::class, 'create']);
Route::post('/kost', [KostController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});