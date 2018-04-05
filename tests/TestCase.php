<?php
/**
 * Created by PhpStorm.
 * User: swapnils
 * Date: 05/04/18
 * Time: 5:26 PM
 */
namespace Irkfdb\IrkfdbLaravel\Test;

use Irkfdb\IrkfdbLaravel\IrkfdbLaravelServiceProvider;
use Irkfdb\IrkfdbLaravel\IrkfdbLaravelFacade;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return Irkfdb\IrkfdbLaravel\IrkfdbLaravelServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [IrkfdbLaravelServiceProvider::class];
    }

    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'IrkfdbLaravel' => IrkfdbLaravelFacade::class,
        ];
    }

    public function testInstance()
    {
        $this->assertEquals(1, 1);
    }
}