<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::DefaultStringLength(191);
        // setlocale(LC_TIME, 'IND');
        setlocale(LC_TIME, 'IND');
        // config(['app.locale' => 'id']);
        // Carbon::setLocale('id');
	    // date_default_timezone_set('Asia/Jakarta');
    }
}
