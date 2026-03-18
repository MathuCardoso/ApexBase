<?php

use Core\router\Router;
use Dotenv\Dotenv;

define('BASE_PATH', dirname(__DIR__));
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

date_default_timezone_set($_ENV['APP_DEFAULT_TIMEZONE']);

if ($_ENV['APP_ENV'] === 'development') {
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
} else {
	ini_set('display_errors', 0);
}

set_exception_handler(function ($e) {
	while (ob_get_level() > 0) {
		ob_end_clean();
	}

	if ($_ENV['APP_ENV'] === 'production') {
		http_response_code(500);
		addLog($e);
		require_once errorsPath() . '/500.php';
	} else {
		throw $e;
	}
	exit;
});

// throw new Exception("EXCEPTION DE TESTE");

require_once __DIR__ . '/../routes/web.php';
Router::dispatch();
