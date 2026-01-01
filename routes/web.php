<?php

use App\Http\Controllers\MenuController;
use App\Http\Middleware\EnsureCustomerExists;
use Illuminate\Support\Facades\Route;

Route::middleware(EnsureCustomerExists::class)->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/menu', [MenuController::class, 'index']);
});
