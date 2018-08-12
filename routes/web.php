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

//Route::get('lostpassword','LostPasswordController@index')->name('lostpassword');
Route::get('register','RegisterController@index')->name('register');

Route::group(['middleware' => ['auth']],function(){
    Route::post('login','MainController@index')->name('login');
    Route::post('store','MainController@store')->name('store');
    Route::get('home','HomeController@index')->name('home');
    Route::get('main','MainController@index')->name('main');
});

Auth::routes();
