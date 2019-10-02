<?php

use Illuminate\Support\Facades\Auth;
use App\User;

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

// Route::get('/','PageController@index');

Route::get('/', 'HomeController@index')->name('home');

Route::post('/registered','RegisterWorkshopController@store')->name('register_workshop');

// Route::get('/profile', function () {
//     return view('layouts.profile');
// });

// Route::get('/get', function () {
//     return view('layouts.get');
// });

Route::middleware('auth')->group(function(){
    Route::prefix('admin')->middleware('admin')->group(function(){

        Route::get('/',function(){

            $user = Auth::user();

            return view('admin.admin', compact('user'));
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

        Route::resource('registered', 'RegisterWorkshopController')->except([
            'show','destroy','create','store','update'
        ]);


        Route::get('/news/{news}','NewsController@destroy')->name('news.destroy');
        Route::get('/registered/{registered}','RegisterWorkshopController@destroy')->name('registered.destroy');
        Route::put('/registered/bayar/{registered}','RegisterWorkshopController@update')->name('registered.pay');
        Route::get('admin/galleries/{gallery}','GalleryController@destroy')->name('galleries.destroy');
        Route::get('admin/participants/{participant}','ParticipantController@destroy')->name('participants.destroy');
    });
});

