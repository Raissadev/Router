<?php

namespace Raissadev\Routes\Route;

trait Treatments
{
    private function formatUrl(): string
	{
		return urldecode( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) );
	}

	private function formatPath(string $path): string
	{
		if (!str_contains($path, "{id}")) return $path;

		return str_replace('{id}', $this->id, $path);
	}

	private function formatClass(string $path): void
	{
        if (!str_contains($path, "@")) throw new \Exception("Error! Use @ to separate class from method", 1);
        
        $this->setClassyMethod(... explode("@", $path));
	}

    private function setClassyMethod(string $class, string $method): void
    {
        $this->setClass($class);
        $this->setMethod($method);
    }

	private function getInteger(): int|string
	{
		return filter_var($this->url, FILTER_SANITIZE_NUMBER_FLOAT);
	}

	private function resolve(string $class, string $method): mixed
	{
        if (!$this->class->hasMethod($method)) return "Method not exists!";
	}

}