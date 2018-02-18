<?php

namespace App\Providers;

use App\Footer;
use App\Social;
use View;
use App\Setting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $settings = Setting::first();
        $footer   = Footer::first();
        $social_links = Social::first();

        View::share([
            'settings' => $settings,
            'footer'   => $footer,
            'social_links' => $social_links,
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
