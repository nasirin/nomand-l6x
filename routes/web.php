<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// FRONTEND
// home
Route::get('/', 'frontend\HomeController@index')
    ->name('UserDashboard');

// detail
Route::get('/detail', 'frontend\DetailController@index')
    ->name('UserDetail');

// checkout
Route::get('/checkout', 'frontend\CheckoutController@index')
    ->name('UserCheckout');

// success
Route::get('/success', 'frontend\SuccessController@index')
    ->name('UserSuccessCheckout');


// BACKEND
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'backend.HomeController@index')
            ->name('AdminDashboard');
    });

Route::get('/admin', function () {
    return view('backend.pages.home');
});
