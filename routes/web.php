<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentLoginController;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/sampleDB', [AgentLoginController::class, 'index']);