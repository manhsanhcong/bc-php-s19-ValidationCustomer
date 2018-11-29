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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'customer'], function () {
    Route::get('/', 'CustomerController@index')->name('customer.index');

    Route::get('/create', 'CustomerController@create')->name('customer.create');

    Route::post('/create', 'CustomerController@store')->name('customer.store');

    Route::get('/{id}/view', 'CustomerController@view')->name('customer.view');

    Route::get('/{id}/edit', 'CustomerController@edit')->name('customer.edit');

    Route::post('/{id}/edit', 'CustomerController@update')->name('customer.update');

    Route::get('/{id}/delete', 'CustomerController@destroy')->name('customer.destroy');

    Route::get('/search', 'CustomerController@search')->name('customer.search');
});

