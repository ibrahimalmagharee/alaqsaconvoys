<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::group(['namespace' => 'Dashboard', 'middleware' =>['role:administrator'], 'prefix' => 'admin'], function (){

        Route::get('index','DashboardController@index')->name('admin.dashboard');
        Route::get('logout','LoginController@logout')->name('admin.logout');


        ######################### Profile Routes #############################################################

        Route::group(['prefix' => 'profile'], function (){
            Route::get('edit', 'ProfileController@edit')->name('edit.profile');
            Route::put('update', 'ProfileController@update')->name('update.profile');
        });

        ######################### End Profile Routes #############################################################


        ##################  Blog Routes #############################################################

        Route::group(['prefix' => 'brigade'], function (){
            Route::get('/show', 'BrigadeController@index')->name('index.brigades');
            Route::get('/create', 'BrigadeController@create')->name('create.brigade');
            Route::post('save', 'BrigadeController@store')->name('save.brigade');
            Route::get('edit/{id}', 'BrigadeController@edit')->name('edit.brigade');
            Route::post('update/{id}', 'BrigadeController@update')->name('update.brigade');
            Route::get('delete/{id}', 'BrigadeController@destroy')->name('delete.brigade');

        });
        ######################### End Blog Routes #############################################################


    });

    Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin', 'prefix' => 'admin'], function(){
        Route::get('/login','LoginController@login')->name('admin.login.page');
        Route::post('/check-login','LoginController@checkLogin')->name('check.admin.login');
    });

});

