<?php
namespace Irkfdb\IrkfdbLaravel\Test;

use IrkfdbLaravel;
use Irkfdb\IrkfdbLaravel\Test\TestCase as TestCase;

class IrkfdbLaravelPackageTest extends TestCase
{
    private function parseResponse($response)
    {
        $status = $response['status'];
        $resultSet = (isset($response['resultSet'])) ? $response['resultSet'] : null;
        $data = (isset($resultSet['data'])) ? $resultSet['data'] : null;

        $message = (isset($response['errorMessage'])) ? $response['errorMessage'] : '';

        return array(
            'status' => $status,
            'data' => $data,
            'errorMessage' => $message
        );
    }

    public function testApiWorking()
    {

        $response = $this->parseResponse(IrkfdbLaravel::getRandomFact());

        $this->assertEquals('OK', $response['status']);
        $this->assertGreaterThanOrEqual(1, count($response['data']));
        $this->assertEmpty($response['errorMessage']);

    }

    public function testProperCategoryFact()
    {
        $response = $this->parseResponse(IrkfdbLaravel::fromCategories('geeky')->getRandomFact());

        $this->assertEquals('OK', $response['status']);
        $this->assertEquals(true, in_array('geeky', $response['data'][0]['categories']));
    }
}