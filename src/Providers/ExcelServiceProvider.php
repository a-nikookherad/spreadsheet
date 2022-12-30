<?php

namespace Excel\Providers;

use App\Services\Excel\src\Test;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind("ExcelLogic", function () {
            return resolve(ExcelLogic::class);
        });
    }
}
