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

        if (! config('app.installed')) {
            return;
        }



        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');



    }

}
