<?php 
namespace Tiup\LaravelTiupSdk;

use Illuminate\Support\ServiceProvider;
use Tiup;
class LaravelTiupSdkServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-tiup-sdk.php' => \config_path('laravel-tiup-sdk.php'),
        ], 'config');
    }

    /**
     * Register the service providers.
     *
     * @return void
     */
    public function register()
    {
        // Main Service
        $this->app->bind('Tiup\LaravelTiupSdk\LaravelTiupSdk', function ($app) {
            $config = $app['config']->get('laravel-tiup-sdk.tiup_config');
            return new Tiup\Tiup($config);
        });
    }
}
