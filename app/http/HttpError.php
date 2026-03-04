<?php

namespace App\http;

use App\controller\Controller;

class HttpError extends Controller{

    public static function showError(int $code = 500, string $message = "") {

        http_response_code($code);
        $instance = new self();
        $instance->loadView("errors/{$code}", ["message" => $message]);
        exit;

    }
    
}