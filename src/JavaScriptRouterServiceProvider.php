<?php

namespace Iroid\javascript-router;

use Illuminate\Support\ServiceProvider;

class javascript-routerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'javascript-router');

        // Optionally, you can publish views if needed
        $this->publishes([
            __DIR__.'/../resources/views/javascript-router.blade.php' => resource_path('views/vendor/javascript-router/javascript-router.blade.php'),
        ]);
    }

    public function register()
    {
        //
    }
}
