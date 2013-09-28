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
    private $type_file,
            $path_bundles;

    private $bundles;

    public function __construct($bundles)
    {
        $this->type_file = '*.php';
        $this->path_bundles = __DIR__.'/../../src/';

        $this->bundles = $bundles;
    }

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

    public function allPackages()
    {
        foreach($this->bundles as $bundle)
            self::load($this->path_bundles.$bundle.'/Controller/'.$this->type_file);
    }
}
