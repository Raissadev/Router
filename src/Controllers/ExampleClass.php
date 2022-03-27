<?php

namespace Raissadev\Routes\Controllers;

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