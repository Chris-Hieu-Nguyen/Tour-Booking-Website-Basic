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
Route::get('/register','Auth\RegisterController@index')->name('register');
Route::post('register','Auth\RegisterController@store')->name('register.store');

Route::group(['prefix' => 'ad'], function () {
    Route::middleware(['check.login'])->group(function(){
        Route::group([
            'middleware' => ['inRole'],
            'inRole' => ['admin']]
        ,function(){
            Route::get('/dashboard', 'Admin\HomeController@index')->name('dashboard');
            
            Route::group(['prefix' => 'users'], function () {
                Route::get('/','Admin\UserController@index')->name('users');
            });
            Route::group(['prefix' => '/tour'], function () {
                Route::get('/','Admin\TourController@index')->name('tour.list');
                Route::get('/create','Admin\TourController@create')->name('tour.create');
            });

            Route::group(['prefix' => '/category'], function () {
                Route::get("/","Admin\CategoryController@index")->name('category.list');
                Route::get("/create","Admin\CategoryController@create")->name('category.create');
                Route::post("/store","Admin\CategoryController@store")->name('category.store');
                Route::delete('/delete',"Admin\CategoryController@delete")->name('category.delete');
                Route::get('/edit/{id}',"Admin\CategoryController@edit")->name('category.edit');
            });



        });
    });
});
Route::get('/profile',['middleware' => ['check.login','redirect.role'],'uses' =>'HomeController@profile'])->name('profile');