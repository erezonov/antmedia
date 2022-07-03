<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\APIClass;
class AntMediaProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('App\Library\Services\APIClass', function ($app) {
            return new APIClass();
          });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
