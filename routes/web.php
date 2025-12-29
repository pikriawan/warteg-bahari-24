<?php

use App\Http\Middleware\EnsureCustomerExists;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware(EnsureCustomerExists::class);
