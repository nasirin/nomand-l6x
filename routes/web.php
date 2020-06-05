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
Route::get('/detail/{slug}', 'frontend\DetailController@index')
    ->name('UserDetail');

// checkout
Route::post('/checkout/{id}', 'frontend\CheckoutController@process')
    ->name('checkout-proses')
    ->middleware(['auth','verified']);

Route::get('/checkout/{id}', 'frontend\CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth','verified']);

Route::post('/checkout/create/{detail_id}', 'frontend\CheckoutController@create')
    ->name('checkout-create')
    ->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}', 'frontend\CheckoutController@remove')
    ->name('checkout-remove')
    ->middleware(['auth','verified']);

Route::get('/checkout/confirm/{id}', 'frontend\CheckoutController@success')
    ->name('checkout-success')
    ->middleware(['auth','verified']);

// success
Route::get('/success', 'frontend\SuccessController@index')
    ->name('UserSuccessCheckout');


// BACKEND
Route::prefix('admin')
    ->namespace('backend')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'HomeController@index')
            ->name('AdminDashboard');

        Route::resource('travel-package', 'TravelPackagesController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('transaction', 'TransactionController');
    });

Auth::routes(['verify' => true]);
// Route::get('/admin', function () {
    //     return view('backend.pages.home');
    // });


// Route::get('/home', 'HomeController@index')->name('home');
