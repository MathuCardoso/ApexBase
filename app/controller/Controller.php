<?php

namespace App\controller;

class Controller
{
	public function loadView(string $file, array $var = [])
	{
		$fullPath = viewPath() . "{$file}.php";

		if (file_exists($fullPath)) {
			if (!empty($var)) {
				extract($var);
			}

			ob_start();
			$view = new ViewController();
			require_once $fullPath;
			ob_end_flush();
			exit;
		}
		httpError(404);
		exit;
	}
}
