<?php

namespace App\Providers;

use Carbon\Carbon;
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
        \Schema::defaultStringLength(191);

        Carbon::setLocale(config('app.locale'));

        // Объявляем новую Blade-директиву @agent('тип устройства')
        \Blade::if('agent', function ($type) {
            switch (strtolower($type)) {
                case 'desktop':
                    return \Agent::isDesktop();

                case 'mobile':
                    return \Agent::isMobile();
            }
            return \Agent::is($type);
        });
    }

}
