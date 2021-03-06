# Router

## :stop_sign: Attention!

This project was built for educational purposes, therefore it should **NOT** run in production environments.

## Description

Speak devs! I'm bringing here a simple system of routes for you to use in your projects, and even use as a base for studies.

## Usage

```php
<?php
// Class definitions
class ExampleClass
{
    public function A(): void
    {
        echo 'This is page (A)';
    }

    public function B(): void
    {
        echo 'This is page (B)';
    }

    public function intB(int $id): void
    {
        echo $id;
    }

    public function requestExample($params): void
    {
        var_dump($params);
    }
}

// Route Usage
use Raissadev\Routes\Route\Router;

$route = new Router;

$route->setNamespace("");

$route->get("/", "ExampleClass@A");
$route->get("/example-b", "ExampleClass@B");
$route->get("/example/{id}", "ExampleClass@intB");
$route->post("/request", "ExampleClass@requestExample");


```

## Author
Raissa Daros - raissa.fullstack@gmail.com - https://github.com/Raissadev/

## License
This component is licensed under the GPL License

