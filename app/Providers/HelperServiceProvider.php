<?php

namespace App\Providers;

use App\Constract\Helpers\DataGridInterface;
use App\Helpers\DataGrid;
use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(DataGridInterface::class, DataGrid::class);
    }
}
