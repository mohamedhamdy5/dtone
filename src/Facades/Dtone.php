<?php

namespace Hamdy\Dtone\Facades;

use Illuminate\Support\Facades\Facade;

class Dtone extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'hamdy-dtone';
    }
}
