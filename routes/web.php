<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home.homes')->with('title', 'Home');
})->name('index');

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
})->name('language');

/**
 * ==============================
 *           Trading
 * ==============================
 */
Route::prefix('/trading')->group(function() {
    Route::get('/account_type', function () {
        return view('page.trading.account_type')->with('title', 'Account Type');
    })->name('trading.account_type');

    Route::get('/products', function () {
        return view('page.trading.products')->with('title', 'Products');
    })->name('trading.products');

    Route::get('/download', function () {
        return view('page.trading.download')->with('title', 'Download');
    })->name('trading.download');
});

Route::get('/platform', function () {
    return view('page.platform')->with('title', 'Platform');
})->name('platform');

/**
 * ==============================
 *           Partnership
 * ==============================
 */
Route::prefix('/partnership')->group(function() {
    Route::get('/introduction-broker', function () {
        return view('page.partnership.introduction_broker')->with('title', 'Introduction Broker (IB)');
    })->name('partnership.introduction_broker');

    Route::get('/regional-country', function () {
        return view('page.partnership.regional_country')->with('title', 'Regional & Country Partner');
    })->name('partnership.regional_country');
});

/**
 * ==============================
 *           Company
 * ==============================
 */
Route::prefix('/company')->group(function() {
    Route::get('/about', function () {
        return view('page.company.about')->with('title', 'About Us');
    })->name('company.about');
    
    Route::get('/contact', [ContactController::class, 'showContact'])->name('company.contact');
    Route::post('/contact', [ContactController::class, 'sendEmail'])->name('company.contact.send_email');

    Route::get('/aml-policy', function () {
        return view('page.company.aml_policy')->with('title', 'AML Policy');
    })->name('company.aml_policy');
});

Route::get('/privacy-policy', function () {
    return view('page.privacy_policy')->with('title', 'Privacy Policy');
})->name('privacy_policy');
