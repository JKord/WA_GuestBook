<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jura
 * Date: 28.09.13
 * Time: 21:49
 * To change this template use File | Settings | File Templates.
 */

namespace Core;

class AutoLoad
{
    public static function load($path)
    {
        $files = glob($path);
        foreach($files as $key => $file)
            if (strpos($file,'Interface') !== false) {
                $el = $files[$key];
                unset($files[$key]);
                array_unshift($files, $el);
            }

        foreach ($files as $file) {
            require_once $file;
            //print_r($file.'<br>');
        }
    }

    public static function core()
    {
        self::load(__DIR__.'/*.php');
    }

    public static function allPackages()
    {
        foreach(Config::$bundels as $bundle)
        {
            $dir = scandir(Config::$path_bundles.$bundle);
            $dir = array_diff($dir, array('View', '.', '..'));
            foreach($dir as $d)
                self::load(Config::$path_bundles.$bundle.'/'.$d.'/'.Config::$type_file);
        }
    }
}
