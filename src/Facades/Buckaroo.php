<?php

declare(strict_types=1);

namespace Finalbytes\LaravelBuckaroo\Facades;

use Illuminate\Support\Facades\Facade;

class Buckaroo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'buckaroo';
    }
}