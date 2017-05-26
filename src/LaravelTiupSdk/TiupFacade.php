<?php 
namespace Tiup\LaravelTiupSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tiup\LaravelTiupSdk\LaravelTiupSdk
 */
class TiupFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * Don't use this. Just... don't.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Tiup\LaravelTiupSdk\LaravelTiupSdk';
    }
}
