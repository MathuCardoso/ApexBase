<?php
namespace Configs;

class Path
{
    public const DIR_ROOT = __DIR__ . "/../";
    public const DIR_APP = Path::DIR_ROOT . "app/";
    public const DIR_CONTROLLER = Path::DIR_APP . "controller/";
    public const DIR_MODEL = Path::DIR_APP . "model/";
    public const DIR_DIR_REPOSITORY = Path::DIR_APP . "repository/";
    public const DIR_PUBLIC = Path::DIR_ROOT . "public/";
    public const DIR_VIEW = Path::DIR_PUBLIC . "view/";
    public const DIR_CSS = Path::DIR_PUBLIC . "css/";
    public const DIR_JS = Path::DIR_PUBLIC . "js/";
    public const DIR_COMPONENTS = Path::DIR_PUBLIC . "components/";
    public const DIR_ASSETS = Path::DIR_PUBLIC . "assets/";



    ///////////////  URL  /////////////////////

    public const URL_ROOT = "/";
    public const URL_PUBLIC = Path::URL_ROOT . "public/";
    public const URL_VIEW = Path::URL_PUBLIC . "view/";
    public const URL_CSS = Path::URL_PUBLIC . "css/";
    public const URL_JS = Path::URL_PUBLIC . "js/";
    public const URL_COMPONENTS = Path::URL_PUBLIC . "components/";
    public const URL_ASSETS = Path::URL_PUBLIC . "assets/";
}
