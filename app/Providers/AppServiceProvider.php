<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use DB;
use Carbon\Carbon;

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
        Paginator::useBootstrapFive();
    }
}
