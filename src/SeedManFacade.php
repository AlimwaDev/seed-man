<?php

namespace Alimwa\SeedMan;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alimwa\SeedMan\Skeleton\SkeletonClass
 */
class SeedManFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'seedman';
    }
}
