<?php
namespace Core;

class Config
{
    public static
        $type_file,
        $path_bundles,
        $bundels;

    private function __construct() { }

    public static function load($bundels = null)
    {
        self::$type_file = '*.php';
        self::$path_bundles = __DIR__.'/../../src/';

        self::$bundels = $bundels;
    }
}