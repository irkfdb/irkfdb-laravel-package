<?php
/**
 * Created by PhpStorm.
 * User: swapnils
 * Date: 05/04/18
 * Time: 3:24 PM
 */
namespace Irkfdb\IrkfdbLaravel;

use Illuminate\Support\Facades\Facade;

class IrkfdbLaravelFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'irkfdblaravel';
    }
}