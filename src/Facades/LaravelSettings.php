<?php

namespace Inupress\LaravelSettings\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Inupress\LaravelSettings\LaravelSettings
 */
class LaravelSettings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Inupress\LaravelSettings\LaravelSettings::class;
    }
}
