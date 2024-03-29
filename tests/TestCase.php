<?php

declare(strict_types=1);

namespace Finalbytes\Buckaroo\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            \Finalbytes\Buckaroo\ServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app): array
    {
        return [
            'Buckaroo' => \Finalbytes\Buckaroo\Facades\Buckaroo::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('buckaroo.website_key', 'test');
        $app['config']->set('buckaroo.secret_key', 'test');
        $app['config']->set('buckaroo.test', 'true');
    }
}
