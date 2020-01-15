<?php
use App\Core\App;

App::bind('config',require 'config.php');

App::bind('database',  new QueryBuilder(
	Connection::make(App::get('config')['database'])
));

function view($name,$data = []) 
{
	extract($data);
	
	return require "app/views/{$name}.view.php";
}

function dd($data) 
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	die();
}

function redirect($path)
{
	header("Location: /{$path}");
}