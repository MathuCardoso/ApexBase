<?php

namespace App\controller;

use App\database\Connection;
use PDO;

class HomeController extends Controller
{
    private PDO $conn;

    public function __construct() {
        $this->conn = Connection::getConn();
    }

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
