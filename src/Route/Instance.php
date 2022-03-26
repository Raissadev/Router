<?php

namespace Raissadev\Routes\Route;

trait Instance
{
    protected readonly string $namespace;
    protected object $class;
    protected string $method;
    protected array $request;

	public function setNamespace(string $namespace): void
    {
        if(substr($namespace, -1) !== '\\') $namespace .= '\\';

        $this->namespace = $namespace;
    }

    private function setClass(string $parameter): void
    {
        try {
            $this->class = new \ReflectionClass($this->namespace . $parameter);
        } catch (\ReflectionException $exception) {
            throw new \ReflectionException("Class not exists");
        }
    }

    private function setMethod(string $parameter): void
    {        
        if (!$this->class->hasMethod($parameter)) throw new \ReflectionException("Method not exists");

        $this->method = $this->class->getMethod($parameter)->name;
    }

    private function setRequest(?array $request): void
    {
        if (!is_array($request)) throw new \Exception("Error Processing Request", 1);

        $this->request = $request;
    }

    private function getInstance(): mixed
    {
        $class = $this->class->getName();
        $method = $this->method;

        if (isset($this->request)) return (new $class)->$method($this->request);

		return $this->id !== "" ? (new $class)->$method($this->id) : (new $class)->$method();
    }

}