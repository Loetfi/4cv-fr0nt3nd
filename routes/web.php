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
	
	Route::get('/','HomeController@index')->name('index');

	Route::get('about-us','AboutController@index');
	
	Route::get('faq','FaqController@index');

	Route::get('contact-us','ContactController@index');
	
	Route::group(['middleware'=>'check-access'], function() {

		Route::get('profile','ProfileController@index');
	});

	/**
	* ==================================================================================================================
	* REGISTER ROUTE 
	*/
		Route::get('register','RegisterController@index');

		Route::post('register/store','RegisterController@store');

		Route::get('register/active-account/{hash}','RegisterController@activeAccount'); // hash email and time

		Route::get('register/resend-link-page/{hash}','RegisterController@resendLinkPage'); // page resend link active user

		Route::post('register/send-link','RegisterController@sendLink'); // process active user

		Route::post('register/resend-email','RegisterController@resendEmail'); // process resend email
	/**
	* END REGISTER ROUTE
	* ==================================================================================================================
	*/

	/**
	* ==================================================================================================================
	* OTP ROUTE
	*/
		Route::get('otp/{phone_number}','OtpController@index');
		
		Route::post('otp/resend-otp','OtpController@resendOtp');

		Route::post('otp/validate-otp','OtpController@validateOtp');
	/**
	* END OTP ROUTE
	* ==================================================================================================================
	*/
});

Route::group(['namespace'=>'Auth'], function() {

	Route::post('login','AuthController@login');

	Route::group(['middleware'=>'check-access'], function() {

		Route::get('logout','AuthController@logout');
	});

	// socialite
	Route::get('auth/{provider}', 'AuthController@redirectToProvider');
	Route::get('auth/{provider}/callback', 'AuthController@handleProviderCallback');
});

// Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('test_conn_pgsql', 'HomeController@test_conn_pgsql');

