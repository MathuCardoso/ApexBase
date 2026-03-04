<?php

return [
    "driver"   => "mysql",
    "host"     => $_ENV['DB_HOST'],
    "port"     => $_ENV['DB_PORT'],
    "database" => $_ENV['DB_DATABASE'],
    "user"     => $_ENV['DB_USER'],
    "password" => $_ENV['DB_PASSWORD'],
    "options"  => [

    ]
];