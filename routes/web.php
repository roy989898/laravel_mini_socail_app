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
    return redirect(route('user_login'));
});


Route::get('/user_login', 'MyLoginController@showLoginPage')->name('user_login');

Route::post('/login', 'MyLoginController@login')->name('login');
