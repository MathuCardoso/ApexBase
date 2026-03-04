<?php

namespace Configs;


class App
{

    public static function name(): string
    {
        return $_ENV['APP_NAME'] ?? "en" ?? "Project-Name";
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
