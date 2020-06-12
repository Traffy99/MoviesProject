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



Auth::routes();

Route::get('/', 'ViewingController@index');
Route::get('viewings/createViewing/{id}', 'ViewingController@createViewing');
Route::resource('viewings', 'ViewingController');
Route::get('admin/block/{id}', 'AdminController@block');
Route::resource('admin', 'AdminController');
Route::resource('movies', 'MovieController');
Route::resource('reservations', 'ReservationController');
Route::get('profile/delete', 'ProfileController@deletePicture');
Route::resource('profile', 'ProfileController');
Route::post('viewings/filter', 'ViewingController@filterViewings');


Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('lang/{locale}','LanguageController')->name('lang');
Route::resource('/review','ReviewController')->except(['create']);
Route::get('/review/create/{movie}', 'ReviewController@create');
Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');
