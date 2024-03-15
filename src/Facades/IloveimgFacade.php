<?php

namespace Pepperfm\Iloveimg;

use Illuminate\Support\Facades\Facade;

class IloveimgFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'iloveimg-for-laravel';
    }
}
