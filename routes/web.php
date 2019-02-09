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

// User routes

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


// Admin routes

// route() : must use a name for a route with the same route name
// name( expecting the login submit route )
Route::get('/admin', 'Auth\AdminLoginController@showLoginPage')->name('admin.login');
Route::post('/admin', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin_dashboard', 'AdminController@dashboard')->name('admin.dashboard');

