<?php

namespace Raissadev\Routes\Route;

class Router
{
	private string $url;
	private int|string $id;

    use Treatments; 
    use Instance;

	public function __construct()
	{
		$this->url = $this->formatUrl();
		$this->id = $this->getInteger();
	}

	public function get(string $path, string $parameter): mixed
	{
		$parameter = $this->formatClass($parameter);
		$path = $this->formatPath($path);

		if ($path !== $this->url) return "Error Processing Request";

        return $this->getInstance();
	}

    public function post(string $path, string $parameter): self|string
	{
        if (!isset($_POST)) throw new \Exception("No post requests found", 1);

		$this->formatClass($parameter);
		$path = $this->formatPath($path);

		if ($path !== $this->url) return "Error processing request";

		$this->setRequest(filter_input_array(INPUT_POST, $_POST , FILTER_DEFAULT));

        return $this->getInstance();
	}


}