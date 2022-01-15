<?php

spl_autoload_register(function($class){
	include __DIR__ . '/' . str_replace("\\", "/", $class) . '.php';
});

$data = require_once 'routing.php';

$controller = new $data[$_GET['page']]['controller'];
call_user_func([
	$controller,
	$data[$_GET['page']]['controller']
			   ]);