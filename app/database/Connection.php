<?php

namespace App\database;

use Configs\Database;
use PDO;
use PDOException;

class Connection
{
    private static ?PDO $conn = null;

    public static function getConn(): PDO
    {

        if (self::$conn == null) {

            $database = new Database();
            $db = $database->getDbInfo();

            $dsn = "{$db['driver']}:host={$db['host']};dbname={$db['dbName']};port={$db['port']}";

            try {
                self::$conn = new PDO(
                    dsn: $dsn,
                    username: $db['user'],
                    password: $db['password'],
                    options: $db['options']
                );
            } catch (PDOException $p) {
                echo "Nao foi possível se conectar ao banco de dados.<br>";
                echo $p->getMessage();
            }
        }

        return self::$conn;
    }
}
