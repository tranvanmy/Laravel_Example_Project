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

Route::group(['prefix' => 'account'], function () {
    Route::get('/login', 'Auth\LoginController@login')->name('login');
    Route::post('/login-handle', 'Auth\LoginController@handleLogin')->name('login-handle');
    
    Route::post('/register', 'Auth\LoginController@register')->name('register');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    Route::get('/', function () { return view('admin/modules/dashboard'); });
    Route::resource('/user', 'UserController');
});
