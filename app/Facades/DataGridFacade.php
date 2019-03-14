<?php

namespace App\Facades;

use App\Constract\Helpers\DataGridInterface;
use Illuminate\Support\Facades\Facade;

class DataGridFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DataGridInterface::class;
    }
}
