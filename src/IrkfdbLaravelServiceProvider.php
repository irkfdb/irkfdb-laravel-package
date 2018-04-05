<?php
/**
 * Created by PhpStorm.
 * User: swapnils
 * Date: 05/04/18
 * Time: 3:24 PM
 */
namespace Irkfdb\IrkfdbLaravel;

use Illuminate\Support\ServiceProvider;

class IrkfdbLaravelServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('irkfdblaravel', function ($app) {
            return (new IrkfdbLaravelService());
        });
    }

    public function provides()
    {
        return [
            'irkfdblaravel'
        ];
    }
}
