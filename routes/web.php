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

Route::group(['namespace'=>'Frontend'], function() {
	
	Route::get('/','HomeController@index');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test_conn_pgsql', 'HomeController@test_conn_pgsql');