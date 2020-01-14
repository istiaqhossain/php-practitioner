<?php

class Router
{
	public $routes = [
		'GET' => [
			'404' => 'NotFoundController@index'
		],
		'POST' => []
	];

	public static function load($file)
	{
		$router = new static;

		require $file;

		return $router;
	}

	public function get($uri, $controller) 
	{
		$this->routes['GET'][$uri] = $controller;
	}
	
	public function post($uri, $controller) 
	{
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType)
	{
		if (array_key_exists($uri, $this->routes[$requestType])) {
			return $this->callAction(
				...explode('@', $this->routes[$requestType][$uri])
			);
		}

		header('Location: /404');
	}

	protected function callAction($controller,$action) 
	{
		$controller = new $controller;
		
		if (! method_exists($controller,$action)) {
			throw new Exception("Specific Controller does not respond to the {$action} action");
		}
		
		return $controller->$action();
	}
}