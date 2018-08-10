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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/users', 'UsersController@index')->name('user.index');

    Route::get('/user/create', 'UsersController@create')->name('user.create');

    Route::get('/user/edit/{id}', 'UsersController@edit')->name('user.edit');

    Route::get('/user/update/{id}', 'UsersController@update')->name('user.update');
    

});
