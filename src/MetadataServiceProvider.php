<?php

namespace Tir\Metadata;


use Illuminate\Support\ServiceProvider;
use Tir\Page\Entities\Page;

class MetadataServiceProvider extends ServiceProvider
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

        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');

        if (! config('app.installed')) {
            return;
        }

    }

}
