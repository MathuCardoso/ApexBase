<?php

namespace Configs;

class Path
{
    /*
    |--------------------------------------------------------------------------
    | FILESYSTEM PATHS
    |--------------------------------------------------------------------------
    */

    public const ROOT = __DIR__ . "/../";
    public const APP = self::ROOT . "app/";
    public const PUBLIC = self::ROOT . "public/";
    public const VIEW = self::PUBLIC . "view/";
    public const CSS = self::PUBLIC . "css/";
    public const JS = self::PUBLIC . "js/";
    public const COMPONENTS = self::VIEW . "components/";
    public const ERRORS = self::VIEW . "errors/";

    /*
    |--------------------------------------------------------------------------
    | DYNAMIC URL ROOT
    |--------------------------------------------------------------------------
    */

    public static function urlRoot(): string
    {
        // Detecta automaticamente a pasta base do projeto
        $scriptName = $_SERVER['SCRIPT_NAME']; // ex: /basePhpProject/index.php
        return rtrim(str_replace("index.php", "", $scriptName), "/") . "/";
    }

    /*
    |--------------------------------------------------------------------------
    | URL BUILDERS
    |--------------------------------------------------------------------------
    */

    public static function url(string $path = ""): string
    {
        return self::urlRoot() . ltrim($path, "/");
    }

    public static function asset(string $path = ""): string
    {
        return self::url("public/assets/" . $path);
    }

    public static function css(string $file = ""): string
    {
        return self::url("public/css/" . $file);
    }

    public static function js(string $file = ""): string
    {
        return self::url("public/js/" . $file);
    }
}
