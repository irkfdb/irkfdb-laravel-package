### IRKFDB Laravel Package

It is a wrapper package made on top of [irkfdb-php-client](https://github.com/irkfdb/irkfdb-php-client) for laravel.

#### Installation
IrkfdbLaravel requires PHP 7.0 and above. This particular version supports Larave 5.5 and above.

To get the package, simply require using composer
```
composer require irkfdb/irkfdb-laravel-package
```

If automatic package discovery is not used in the project then you need to register the service provider of this package in ```config/app.php```
```
'provides' => [
    ...
    \Irkfdb\IrkfdbLaravel\IrkfdbLaravelServiceProvider::class,
    ...
]
```
and you can optinally alias our facade
```
'aliases' => [
    ...
    'IrkfdbLaravel' => \Irkfdb\IrkfdbLaravel\IrkfdbLaravelFacade::class
    ...
]
```

#### Example Usage
```
use IrkfdbLaravel;
class TestController {
    public function index()
    {
        $categories = IrkfdbLaravel::getCategories();
        $randomFact = IrkfdbLaravel::getRandomFact();
    }
}
```

#### Test Cases
You can run the test cases by running the following command
```
./vendor/bin/phpunit --configuration phpunit.xml
```