<?php

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

// Home
Route::get('/', 'HomeController@index')->name('home');

// Auth
Route::get("/login", "LoginController@index")->name('login');
Route::get("/logout", "KontributorController@logout")->name('logout');

// FB
Route::get('/login/redirect/{provider}', 'LoginController@redirect')->name('login.redirect');
Route::get('/login/callback/{provider}', 'LoginController@callback')->name('login.callback');

// places
Route::get('/places/search', 'HomeController@searchPlaces')->name('places.search');
Route::get('/places/detail/{id}', 'HomeController@detail')->name('places.detail');

// user
Route::group(['prefix' => 'kontributor', 'middleware' => 'auth'], function() {
    Route::get('/', 'KontributorController@index')->name('kontributor.index');
    // Wisata
    Route::resource('/wisata', 'WisataController');
    Route::resource('/artikel', 'ArtikelController');
});

