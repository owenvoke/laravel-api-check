<?php

declare(strict_types=1);

namespace OwenVoke\LaravelApiCheck\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use OwenVoke\LaravelApiCheck\CheckServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            CheckServiceProvider::class,
        ];
    }
}
