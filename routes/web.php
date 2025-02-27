<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentLoginController;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/agentMTD', function () {
    return view('agentMTD');
});

Route::get('/agentYTD', function () {
    return view('agentYTD');
});

Route::get('/branchHonorRollsMTD'  , function () {
    return view('branchHonorRollsMTD');
});

Route::get('/sampleDB', [AgentLoginController::class, 'index']);