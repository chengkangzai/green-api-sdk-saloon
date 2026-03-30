<?php

namespace Cck\GreenApiSdkSaloon\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cck\GreenApiSdkSaloon\GreenApiSdkSaloon
 */
class GreenApiSdkSaloon extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Cck\GreenApiSdkSaloon\GreenApiSdkSaloon::class;
    }
}
