<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('welcome');
});
Route::get('/', [DemoController::class , 'view']);
Route::post('/', [DemoController::class , 'submit']);
