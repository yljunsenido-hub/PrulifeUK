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




// Reports Tab

Route::get('/agentMTD', function () {
    return view('Reports_Tab/agentMTD');
});

Route::get('/agentYTD', function () {
    return view('Reports_Tab/agentYTD');
});

Route::get('/branchHonorRollsMTD'  , function () {
    return view('Reports_Tab/branchHonorRollsMTD');
});

Route::get('/unitHonorRolls'  , function () {
    return view('Reports_Tab/unitHonorRolls');
});

Route::get('/unitSummary'  , function () {
    return view('Reports_Tab/unitSummary');
});

Route::get('/subUnitSummary'  , function () {
    return view('Reports_Tab/subUnitSummary');
});

Route::get('/branchSummary'  , function () {
    return view('Reports_Tab/branchSummary');
});

Route::get('/MDRT'  , function () {
    return view('Reports_Tab/MDRT');
});

Route::get('/easyReports'  , function () {
    return view('Reports_Tab/easyReports');
});

//dd