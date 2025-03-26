<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/current-offers', function () {
    return view('current-offers');
});
