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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sendgmail', 'HomeController@sendGmail');

Route::middleware('auth')->group(function(){
    Route::prefix('admin')->middleware('admin')->group(function(){

        Route::get('/',function(){
            return view('admin.admin');
        })->name('admin');        

        Route::resource('news','NewsController')->except([
            'show','destroy'
        ]);
                    
        Route::resource('galleries', 'GalleryController')->except([
            'show','destroy'
        ]);

        Route::resource('participants', 'ParticipantController')->except([
            'show','destroy'
        ]);

        Route::resource('adminAccount', 'AdminAccountController')->except([
            'show','destroy'
        ]);

        Route::get('/news/{news}','NewsController@destroy')->name('news.destroy');
        Route::get('/account/{account}','AdminAccountController@destroy')->name('account.destroy');
        Route::get('admin/galleries/{gallery}','GalleryController@destroy')->name('galleries.destroy');
        Route::get('admin/participants/{participant}','ParticipantController@destroy')->name('participants.destroy');
    });
});

