<?php
/**
 * Created by PhpStorm.
 * User: swapnils
 * Date: 05/04/18
 * Time: 3:24 PM
 */
namespace Irkfdb\IrkfdbLaravel;

use Irkfdb\IrkfdbClient;

class IrkfdbLaravelService
{
    private $irkfdbClient;

    public function __construct()
    {
        $this->irkfdbClient = new IrkfdbClient();
    }

    public function getCategories()
    {
        return $this->irkfdbClient->getCategories();
    }

    public function getRandomFact()
    {
        return $this->irkfdbClient->getRandomFact();
    }
    
}