<?php

namespace App\controller;

class HomeController extends Controller
{


    public function index(): void
    {
        $this->loadView("home");
    }

    public function allParams(array $params): void
    {
        $this->loadView("allParams", ["params" => $params]);
    }

    public function teste(array $params): void
    {
        $this->loadView("teste", ["params" => $params]);
    }
}
