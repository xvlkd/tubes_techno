<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// CRUDS REVIEW
Auth::routes();
Route::resource('review', 'ReviewController');

/*Route::get('/review','ReviewController@index');
Route::get('/review/create','ReviewController@create');
Route::get('/review/{review}','ReviewController@show');
Route::post('/review','ReviewController@store');
Route::delete('/review/{review}','ReviewController@destroy');
Route::get('/review/{review}/edit','ReviewController@edit');
Route::patch('/review/{review}','ReviewController@update');*/

Route::get('/searchReview', 'ReviewController@search');
