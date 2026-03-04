<?php

use App\routing\Router;
use Dotenv\Dotenv;

require_once __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once __DIR__ . "/app/routing/routes.php";

Router::dispatch();