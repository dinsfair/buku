<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [PageController::class, 'login']);

Route::get('/dashboard', [PageController::class, 'dashboard']);

Route::get('/profile', [PageController::class, 'profile']);

Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);
