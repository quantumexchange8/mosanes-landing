<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home.Home');
})->name('index');

/**
 * ==============================
 *           Trading
 * ==============================
 */
Route::prefix('/trading')->group(function() {
    Route::get('/account_type', function () {
        return view('page.trading.AccountType');
    })->name('account_type');

    Route::get('/products', function () {
        return view('welcome');
    })->name('products');

    Route::get('/download', function () {
        return view('welcome');
    })->name('download');
});

Route::get('/platform', function () {
    return view('welcome');
})->name('platform');

/**
 * ==============================
 *           Partnership
 * ==============================
 */
Route::prefix('/partnership')->group(function() {
    Route::get('/introduction_broker', function () {
        return view('welcome');
    })->name('introduction_broker');

    Route::get('/regional_country', function () {
        return view('welcome');
    })->name('regional_country');

    Route::get('/partner', function () {
        return view('welcome');
    })->name('partner');
});

/**
 * ==============================
 *           Company
 * ==============================
 */
Route::prefix('/company')->group(function() {
    Route::get('/about', function () {
        return view('page.About');
    })->name('about');
    
    Route::get('/contact', function () {
        return view('page.Contact');
    })->name('contact');

    Route::get('/aml_policy', function () {
        return view('welcome');
    })->name('aml_policy');
});
