<?php

use App\controller\HomeController;
use App\routing\Router;

Router::get("/", [HomeController::class, "index"]);

Router::get("/{user}/{id}/{idade}", [HomeController::class, "allParams"]);
Router::get("/user/{id}/{idade}", [HomeController::class, "teste"]);

Router::get("/teste", [HomeController::class, "teste"]);