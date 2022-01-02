<?php

namespace App\Providers;

use App\Models\KhoaHoc;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

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
        //
        view()->composer('*', function ($view) {
            $minPrice = KhoaHoc::min('DONGIA');
            $maxPrice = KhoaHoc::max('DONGIA');
            $view->with('minPrice', $minPrice)->with('maxPrice', $maxPrice);
        });
    }
}
