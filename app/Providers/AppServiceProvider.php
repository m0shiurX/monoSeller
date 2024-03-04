<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PHPageBuilder\PHPageBuilder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // register singleton phppagebuilder (this ensures all phpb_ helpers have the right config without first manually creating a pagebuilder instance)
        $this->app->singleton('phpPageBuilder', function ($app) {
            return new PHPageBuilder(config('pagebuilder'));
        });
        $this->app->make('phpPageBuilder');
    }
}
