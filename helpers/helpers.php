<?php

use App\controller\Controller;

function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
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
    echo "<script>";
    echo "alert('{$msg}')";
    echo "</script>";
}
function br($times = 1)
{
    if ($times === 1) {
        echo "<br>";
        return;
    }

    for ($i = 0; $i <= $times; $i++) {
        echo "<br>";
    }
}

function httpError(int $code = 500, string $message = "")
{
    http_response_code($code);
    $controller = new Controller();
    $controller->loadView("errors/{$code}", ["message" => $message]);
    exit;
}

function addLog(string $log = ""): void {

    $logFile = __DIR__ . "/../storage/logs.txt";

    $date = date($_ENV['APP_DATE_FORMAT'] . ' - H:i:s');

    $stringLog = "Data: {$date} | $log\n\n";

    file_put_contents($logFile, $stringLog, FILE_APPEND);
}