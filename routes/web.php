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

    Route::get('/settlement', function () {
        return view('settlement');
    });

    Route::get('/register', function () {
        return view('register');
    });

    Route::get('/email_confirmation', function () {
        return view('email_confirmation');
    });

    Route::get('/forgot_password', function () {
        return view('forgot_password');
    });

    Route::get('/new_password', function () {
        return view('new_password');
    });

    Route::get('/about_us', function () {
        return view('about_us');
    });

    Route::get('/privacy_policy', function () {
        return view('privacy_policy');
    });
});