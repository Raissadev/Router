<?php

require_once 'vendor/autoload.php';

use Raissadev\Routes\Route\Router;
use Raissadev\Routes\Controllers\ExampleClass;

$route = new Router;

$route->setNamespace("Raissadev\Routes\Controllers");

$route->get("/", "ExampleClass@A");
$route->get("/product", "ExampleClass@B");
$route->get("/product/{id}", "ExampleClass@intB");
$route->post("/request", "ExampleClass@requestExample");
