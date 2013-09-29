<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jura
 * Date: 29.09.13
 * Time: 14:13
 * To change this template use File | Settings | File Templates.
 */

namespace Core;


class View
{
    public function render($name, $parameters = null)
    {
        $name = str_replace('::', '/view/', $name);
        include Config::$path_bundles.$name;
    }
}