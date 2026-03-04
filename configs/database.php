<?php

namespace Configs;

use PDO;

class Database
{
    public function getDbInfo(): array
    {
        return [
            "driver"   => $_ENV['DB_DRIVER'],
            "dbName"   => $_ENV['DB_NAME'],
            "host"     => $_ENV['DB_HOST'],
            "port"     => $_ENV['DB_PORT'],
            "user"     => $_ENV['DB_USER'],
            "password" => $_ENV['DB_PASSWORD'],
            "options"  => [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                //Define o tipo do erro como exceção 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                //Define o tipo do retorno das consultas como array associativo
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        ];
    }
}
