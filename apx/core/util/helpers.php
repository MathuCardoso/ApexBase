<?php

use Apx\core\http\View;

function loadView(string $file, array $var = []) {
	$fullPath = viewPath() . "{$file}.php";

		if (file_exists($fullPath)) {
			if (!empty($var)) {
				extract($var);
			}

			ob_start();
			$view = new View();
			require_once $fullPath;
			ob_end_flush();
			exit;
		}
		httpError(404);
		exit;
}

function appName()
{
	return $_ENV['APP_NAME'] ?? 'en' ?? 'Project-Name';
}

function appLang()
{
	return  $_ENV['APP_LANG'] ?? 'en';
}

function basePath()
{
	return BASE_PATH;
}

function viewPath() {
	return basePath() . "/public/view/";
}

function layoutsPath() {
	return viewPath() . "layouts/";
}

function errorsPath() {
	return viewPath() . "errors/";

}

function css(string $file, bool $dir = false)
{
	$file = str_replace(['.css', '/css/'], '', $file);

	return
	$dir == false
	? "/css/{$file}.css"
	: basePath() . "/public/css/{$file}.css";
}

function js(string $file, bool $dir = false)
{
	$file = str_replace(['.js', '/js/'], '', $file);

	return
	$dir == false
	? "/js/{$file}.js"
	: basePath() . "/public/js/{$file}.js";
}

function dd($var)
{
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
	exit;
}

function isRoute(string $route): bool
{
	//Não é funcional ao tentar passar rotas com path params como parametro da função.
	if ($route === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
		return true;
	}

	return false;
}

function alert(string $msg)
{
	echo '<script>';
	echo "alert('{$msg}')";
	echo '</script>';
}
function br($times = 1)
{
	if ($times === 1) {
		echo '<br>';

		return;
	}

	for ($i = 0; $i <= $times; $i++) {
		echo '<br>';
	}
}

function httpError(int $code = 500, string $message = '')
{
	http_response_code($code);
	loadView("errors/{$code}", ['message' => $message]);
	exit;
}

function addLog(string $log = ''): void
{
	$logFile = basePath() . "/storage/logs.txt";

	$date = date($_ENV['APP_DATE_FORMAT'] . ' - H:i:s');

	$stringLog = "Data: {$date} | $log\n\n";

	file_put_contents($logFile, $stringLog, FILE_APPEND);
}
