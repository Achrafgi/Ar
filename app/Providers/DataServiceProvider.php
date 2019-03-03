<?php

namespace App\Providers;

use App\Contracts\Pagination\StatisticsPaginatorInterface;
use App\Services\Pagination\StatisticsPaginatorService;
use Illuminate\Support\ServiceProvider;

class DataServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \App::bind(StatisticsPaginatorInterface::class, StatisticsPaginatorService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
