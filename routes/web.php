<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/supreport', function () {
    return view('supreport');
});

Route::get('/upreport', function () {
    return view('upreport');
});