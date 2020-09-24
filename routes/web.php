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

// Route::get('/', 'ApartmentController@index', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('upr')
    ->namespace('Upr')
    ->middleware('auth')
    ->name('upr.')
    ->group(function () {
      Route::resource('apartments', 'ApartmentController');
    });

Route::get('/', 'ApartmentController@index')->name('apartments.index');

Route::get('/show/{apartment}', 'ApartmentController@show')->name('apartments.show');
