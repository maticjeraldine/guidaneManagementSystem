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
	$view = 'index';
	// if (Auth::user()) {
	// 	$view = '/layouts/profile/index';
	// }

    return view($view);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// violation
Route::get('/violation', 'ViolationController@index');
Route::get('/violation/create', 'ViolationController@create');
Route::post('/violation/store', 'ViolationController@store');
Route::get('/violation/show/{id}', 'ViolationController@show');

// profile routes
Route::post('/violation/update/{id}', 'ViolationController@update');


