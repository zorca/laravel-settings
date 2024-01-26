<?php

namespace Inupress\LaravelSettings;

use Inupress\LaravelSettings\Commands\LaravelSettingsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelSettingsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-settings')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-settings_table')
            ->hasCommand(LaravelSettingsCommand::class);
    }
}
