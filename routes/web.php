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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index')->name('home');

// Route::get('/profile', function () {
//     return view('layouts.profile');
// });

// Route::get('/get', function () {
//     return view('layouts.get');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){
    Route::prefix('admin')->middleware('admin')->group(function(){

        Route::get('/',function(){
            return view('admin.admin');
        })->name('admin');

        Route::get('/news',function(){
            return view('admin.news');
        });

        Route::resource('galleries', 'GalleryController')->except([
            'show','destroy'
        ]);

        Route::resource('participants', 'ParticipantController')->except([
            'show','destroy'
        ]);

    });
});

Route::get('admin/galleries/{gallery}','GalleryController@destroy')->name('galleries.destroy');
Route::get('admin/participants/{participant}','ParticipantController@destroy')->name('participants.destroy');
