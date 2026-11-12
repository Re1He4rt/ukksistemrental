<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use APP\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('dashboard.index');
});

