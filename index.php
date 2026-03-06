<?php

use App\routing\Router;
use Dotenv\Dotenv;

require_once __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

date_default_timezone_set($_ENV['APP_DEFAULT_TIMEZONE']);

set_exception_handler(function ($e) {
    http_response_code(500);
    addLog($e);
    require_once "public/view/errors/500.php";
    exit;
});

//throw new Exception("EXCEPTION DE TESTE");

require_once __DIR__ . "/app/routing/routes.php";

Router::dispatch();
