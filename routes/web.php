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
	if (Auth::user()) {
		$view = '/layouts/profile/index';
	}

    return view($view);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/violation', 'ViolationController@index');
