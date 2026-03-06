<?php


namespace App\controller;

use App\controller\ViewController;
use Configs\Path;

class Controller
{

    public function loadView(string $file, array $var = [])
    {
        $viewPath = Path::VIEW;


        $fullPath = "$viewPath{$file}.php";

        if (file_exists($fullPath)) {

            if (!empty($var))
                extract($var);

            $view = new ViewController();
            require_once $fullPath;
            exit;
        }
        echo "Não foi possível encontrar a página.";
        exit;
    }
}
