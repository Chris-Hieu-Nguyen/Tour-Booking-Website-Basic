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

Route::get('/','HomeController@index')->name('home');

// login and register
Route::get('/login','Auth\LoginController@login')->name('login');
Route::post('/login','Auth\LoginController@processLogin')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'ad'], function () {
    Route::middleware(['check.login'])->group(function(){
        Route::group([
            'middleware' => ['inRole'],
            'inRole' => ['admin']]
        ,function(){
            Route::get('/dashboard', 'Admin\HomeController@index')->name('dashboard');
            
            Route::group(['prefix' => '/tour'], function () {
                Route::get('/','Admin\TourController@index');
            });
        });
    });
});
