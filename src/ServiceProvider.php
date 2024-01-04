<?php

declare(strict_types=1);

namespace Finalbytes\Buckaroo;

use Buckaroo\BuckarooClient;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('buckaroo.php'),
            ], 'config');
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'buckaroo');

        $this->app->singleton('Buckaroo', function () {
            return new BuckarooClient(
                config('buckaroo.website_key'),
                config('buckaroo.secret_key'),
                config('buckaroo.test')
            );
        });

        $this->app->alias('Buckaroo', 'buckaroo');
    }
}
