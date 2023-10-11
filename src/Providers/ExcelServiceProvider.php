<?php

namespace Excel\Providers;

use Excel\Contracts\ExcelLogicInterface;
use Excel\Logics\ExcelLogic;
use Illuminate\Support\ServiceProvider;

class ExcelServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ExcelLogicInterface::class, ExcelLogic::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
