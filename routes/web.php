<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home.home');
})->name('index');

/**
 * ==============================
 *           Trading
 * ==============================
 */
Route::prefix('/trading')->group(function() {
    Route::get('/account_type', function () {
        return view('page.trading.account_type');
    })->name('trading.account_type');

    Route::get('/products', function () {
        return view('page.trading.products');
    })->name('trading.products');

    Route::get('/download', function () {
        return view('page.trading.download');
    })->name('trading.download');
});

Route::get('/platform', function () {
    return view('page.platform');
})->name('platform');

/**
 * ==============================
 *           Partnership
 * ==============================
 */
Route::prefix('/partnership')->group(function() {
    Route::get('/introduction_broker', function () {
        return view('page.partnership.introduction_broker');
    })->name('partnership.introduction_broker');

    Route::get('/regional_country', function () {
        return view('page.partnership.regional_country');
    })->name('partnership.regional_country');
});

/**
 * ==============================
 *           Company
 * ==============================
 */
Route::prefix('/company')->group(function() {
    Route::get('/about', function () {
        return view('page.company.about');
    })->name('company.about');
    
    Route::get('/contact', function () {
        return view('page.company.contact');
    })->name('company.contact');

    Route::get('/aml_policy', function () {
        return view('page.company.aml_policy');
    })->name('company.aml_policy');
});
