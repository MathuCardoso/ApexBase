<?php

namespace App\database;

use App\controller\Controller;
use Configs\Database;
use Configs\Path;
use PDO;
use PDOException;

class Connection extends Controller
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
                $exception = $p;
                require_once Path::ERRORS . "dbError.php";
                exit;
            }
        }
        
        return self::$conn;
    }
}
