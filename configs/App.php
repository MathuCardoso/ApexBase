<?php

namespace Configs;


class App
{

    public static function name(): string
    {
        return getenv('APP_NAME') ?? "Project-Name";
    }

    public static function appLang(): string
    {
        return  $_ENV['APP_LANG'] ?? "en";
    }

    public static function basePath(): string
    {
        $scriptName = $_SERVER['SCRIPT_NAME'];

        $projectFolder = explode('/', trim($scriptName, '/'))[0];

        return '/' . $projectFolder . '/';
    }
}
