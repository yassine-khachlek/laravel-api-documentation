<?php

namespace Yk\LaravelApiDocumentation;

use Illuminate\Support\ServiceProvider;

class LaravelApiDocumentationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return  void
     */
    public function boot()
    {
        /**
        * Routing
        * Extend the app routes by adding a route group under the package namespace.
        */
        
        $this->app->router->group(['namespace' => 'Yk\LaravelApiDocumentation\App\Http\Controllers'],
            function(){
                require __DIR__.'/routes/web.php';
            }
        );

        $this->loadViewsFrom(resource_path('views/vendor/yk/laravel-api-documentation'), 'Yk\LaravelApiDocumentation');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'Yk\LaravelApiDocumentation');

        $this->publishes(
            [
                __DIR__.'/resources/views' => base_path('resources/views/vendor/yk/laravel-api-documentation'),
            ]
        );

        /**
        * Views
        * Load the package views under the package namespace.
        */

        /*
        $this->loadViewsFrom(__DIR__.'/resources/views', 'Yk/LaravelApiDocumentation');
        */

        /*


        $this->publishes([
            __DIR__.'/public' => public_path('vendor/Yk/LaravelApiDocumentation'),
        ], 'public');

        $this->publishes([
            __DIR__.'/config' => config_path('vendor/Yk/LaravelApiDocumentation'),
        ]);

        $kernel = $this->app['Illuminate\Contracts\Http\Kernel'];
        
        $kernel->pushMiddleware('Yk\LaravelApiDocumentation\App\Http\Middleware\MiddlewareYkLaravelApiDocumentation');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                \Yk\LaravelApiDocumentation\App\Console\Commands\YkLaravelApiDocumentation::class,
            ]);
        }
        */
    }
    
    /**
     * Register the application services.
     *
     * @return  void
     */
    public function register()
    {
        /*
        $this->mergeConfigFrom(
            __DIR__.'/config/app.php', 'packages.Yk.LaravelApiDocumentation.app'
        );

        $this->app->bind('YkLaravelApiDocumentation', function(){
            return $this->app->make('Yk\LaravelApiDocumentation\Classes\YkLaravelApiDocumentation');
        });
        */
    }
}