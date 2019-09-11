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
    return view('home');
});

Route::get('/profile', function () {
    return view('layouts.profile');
});

Route::get('/get', function () {
    return view('layouts.get');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){
    Route::middleware('admin')->group(function(){

        Route::get('/admin',function(){
            return view('admin.admin');
        })->name('admin');

    });
});
