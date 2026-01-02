<?php

use App\Http\Controllers\MenuController;
use App\Http\Middleware\EnsureCustomerExists;
use App\Http\Middleware\EnsureCustomerHasCart;
use Illuminate\Support\Facades\Route;

use App\Models\Customer;
use Illuminate\Http\Request;

Route::middleware([EnsureCustomerExists::class, EnsureCustomerHasCart::class])->group(function () {
    Route::get('/', function (Request $request) {
        return view('home');
    });

    Route::get('/menu', [MenuController::class, 'index']);
});
