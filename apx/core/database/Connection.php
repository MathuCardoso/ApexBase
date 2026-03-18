<?php

namespace Apx\core\database;

use PDO;
use PDOException;

class Connection
{
    private static ?PDO $conn = null;

    public static function getConn(): PDO
    {
        if (self::$conn == null) {

            $db = require "config.php";

            $dsn = "{$db['driver']}:host={$db['host']};dbname={$db['dbName']};port={$db['port']}";

            try {
                self::$conn = new PDO(
                    dsn: $dsn,
                    username: $db['user'],
                    password: $db['password'],
                    options: $db['options']
                );
            } catch (PDOException $p) {
                $exception = $p;
                require_once errorsPath() . "dbError.php";
                exit;
            }
        }
        
        return self::$conn;
    }
}
