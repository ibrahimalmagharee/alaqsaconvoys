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
    Route::group(['namespace' => 'Dashboard', 'middleware' =>'auth:admin', 'prefix' => 'admin'], function (){

        Route::get('index','DashboardController@index')->name('admin.dashboard');
        Route::get('logout','LoginController@logout')->name('admin.logout');


        ######################### Profile Routes #############################################################

        Route::group(['prefix' => 'profile'], function (){
            Route::get('edit', 'ProfileController@edit')->name('edit.profile');
            Route::put('update', 'ProfileController@update')->name('update.profile');
        });

        ######################### End Profile Routes #############################################################


        ##################  Blog Routes #############################################################

        Route::group(['prefix' => 'blog'], function (){
            Route::get('/show-blog', 'BlogController@index')->name('index.blog');
            Route::post('save', 'BlogController@store')->name('save.blog');
            Route::get('edit/{id}', 'BlogController@edit')->name('edit.blog');
            Route::post('update/{id}', 'BlogController@update')->name('update.blog');
            Route::get('delete/{id}', 'BlogController@destroy')->name('delete.blog');

        });
        ######################### End Blog Routes #############################################################


    });

    Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin', 'prefix' => 'admin'], function(){
        Route::get('/login','LoginController@login')->name('admin.login.page');
        Route::post('/check-login','LoginController@checkLogin')->name('check.admin.login');
    });

});

