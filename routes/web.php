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
Route::resource('spin', 'SpinController');
Route::resource('customsearch', 'CustomSearchController');
Route::get('/index/cetak_pdf', 'ReviewController@cetak_pdf');

// Customer & PDF
Route::get('/customer', 'CustomerController@index');
Route::get('/customer/tambah','CustomerController@tambah');
Route::post('/customer/store','CustomerController@store');
Route::get('/customer/edit/{id}','CustomerController@edit');
Route::post('/customer/update','CustomerController@update');
Route::get('/customer/hapus/{id}','CustomerController@hapus');
Route::get('/customer/cari','CustomerController@cari');
Route::get('/customer/cetak_pdf', 'CustomerController@cetak_pdf');

Route::get('/review','ReviewController@index');
Route::get('/review/create','ReviewController@create');
Route::get('/review/{review}','ReviewController@show');
Route::post('/review','ReviewController@store');
Route::delete('/review/{review}','ReviewController@destroy');
Route::get('/review/{review}/edit','ReviewController@edit');
Route::patch('/review/{review}','ReviewController@update');

Route::get('/searchReview', 'ReviewController@search');
Route::get('/searchSpin', 'SpinController@search');
