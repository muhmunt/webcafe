<?php

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Gallery;
use App\Participant;
use App\News;

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
// ['register' => false]
Route::get('/password/reset',function(){
    return redirect('/home');
});

Route::get('/',function(){
    return redirect('/home');
});
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@landing')->name('landing');
Route::get('/sendgmail', 'HomeController@sendGmail');

Route::post('/registered','RegisterWorkshopController@store')->name('register_workshop');

Route::middleware('auth')->group(function(){
    Route::prefix('admin')->middleware('admin')->group(function(){

        Route::get('/',function(){

            $user = Auth::user();

            return view('admin.admin', compact('user'));
        })->name('admin');

        Route::resource('news','NewsController')->except([
            'show','destroy'
        ]);
        Route::get('news/recent-news', 'NewsController@recent')->name('news.recent');

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
        
        Route::resource('registered', 'RegisterWorkshopController')->except([
            'show','destroy','create','store','update'
        ]);

        Route::get('registered/search/','RegisterWorkshopController@search')->name('registered.search');

        Route::get('/news/{news}','NewsController@destroy')->name('news.destroy');
        Route::get('/registered/{registered}','RegisterWorkshopController@destroy')->name('registered.destroy');
        Route::put('/registered/bayar/{registered}','RegisterWorkshopController@update')->name('registered.pay');
        Route::put('/news/change-status/{status}','NewsController@changeStatus')->name('news.change');
        Route::get('admin/galleries/{gallery}','GalleryController@destroy')->name('galleries.destroy');
        Route::get('admin/participants/{participant}','ParticipantController@destroy')->name('participants.destroy');
    });
});

