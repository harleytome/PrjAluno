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
    //return view('welcome');
    return redirect()->route('login');
});

//Route::get('lostpassword','LostPasswordController@index')->name('lostpassword');
Route::get('register','RegisterController@index')->name('register');

Route::group(['middleware' => ['auth']],function(){
    Route::get('home','HomeController@index')->name('home');
    Route::get('main','MainController@index')->name('main');
    Route::get('myinfo','StudantController@index')->name('myinfo');
    Route::post('myinfo.store','StudantController@store')->name('myinfo.store');
    Route::post('myphoto.select','MyPhotoController@select')->name('myphoto.select');
    Route::post('myphoto.save/{id}','MyPhotoController@save')->name('myphoto.save');
});

Auth::routes();
