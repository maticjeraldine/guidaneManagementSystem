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

	if (isset(Auth::user()->role) && Auth::user()->role === "superadmin") {
		return redirect('/violation');
	}
	
	if(isset(Auth::user()->role) && Auth::user()->role === "student") {
		return redirect('/student-profile');
	}
	
	if(isset(Auth::user()->role) && Auth::user()->role === "admin") {
		return redirect('/admin');
	}

	return view($view);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// violation
Route::get('/violation', 'ViolationController@index');
Route::get('/violation/create', 'ViolationController@create');
Route::post('/violation/store', 'ViolationController@store');
Route::get('/violation/show/{id}', 'ViolationController@show');
Route::post('/violation/update/{id}', 'ViolationController@update');

// profile reoute
Route::get('/student', 'ProfileController@student');
Route::get('/profile/admin', 'ProfileController@index');
Route::get('/profile/show/{id}', 'ProfileController@show');


// student
Route::get('/student-profile', 'StudentController@index');
Route::get('/student/show/{id}', 'ProfileController@studentShow');

// Admin
Route::get('/admin', 'HomeController@admin');
