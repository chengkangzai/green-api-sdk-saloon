<?php

namespace Cck\GreenApiSdkSaloon;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GreenApiSdkSaloonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('green-api-sdk-saloon')
            ->hasConfigFile();
    }
}
