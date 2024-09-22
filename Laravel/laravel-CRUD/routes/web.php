<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/person', [PersonController::class, 'index']);
Route::post('/person', [PersonController::class, 'store']);

