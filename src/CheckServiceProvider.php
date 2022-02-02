<?php

declare(strict_types=1);

namespace OwenVoke\LaravelApiCheck;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class CheckServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-api-check')
            ->hasConfigFile()
            ->hasRoute('api');
    }
}
