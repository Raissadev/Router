<?php

namespace Raissadev\Routes\Controllers;

class ExampleClass
{
    public function A(): void
    {
        echo 'Is page A';
    }

    public function B(): void
    {
        echo 'Is page B';
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