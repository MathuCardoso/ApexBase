<?php


namespace App\controller;

use App\controller\ViewController;

class Controller
{

    public function loadView(string $file, array $var = [])
    {
        $viewPath = __DIR__ . "/../../public/view/";


        $fullPath = "$viewPath{$file}.php";

        if (file_exists($fullPath)) {

            if (!empty($var))
                extract($var);

            $viewController = new ViewController();
            require_once $fullPath;
            exit;
        }
        echo "Não foi possível encontrar a página.";
        exit;
    }
}
