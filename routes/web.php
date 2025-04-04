<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::middleware(['language'])->group(function () {
    Route::get('/change-language/{lang}', function ($lang) {
        Session::put('lang', $lang);
        return response()->json(['success' => true]);
    });

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/current-offers', function () {
        return view('current-offers');
    });

    Route::get('/cart', function () {
        return view('cart');
    });

    Route::get('/checkout', function () {
        return view('checkout');
    });

    Route::get('/order-process', function () {
        return view('order-process');
    });

    Route::get('/reports', function () {
        return view('reports');
    });

    Route::get('/settings', function () {
        return view('settings');
    });
});