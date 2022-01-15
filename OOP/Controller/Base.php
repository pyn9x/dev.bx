<?php

namespace Controller;

abstract class Base
{
	public function render(string $templatePath, array $params)
	{
		ob_start();

		require_once $templatePath;

		$view = ob_get_clean();

		echo $view;
	}
}