<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jura
 * Date: 27.09.13
 * Time: 16:58
 * To change this template use File | Settings | File Templates.
 */

namespace Core;

abstract class Kernel
{
    private $routing;
    protected $bundels;

    public function __construct()
    {
        $this->register();
        Config::load($this->bundels);
        AutoLoad::allPackages();

        $this->routing = new Routing();
    }

    abstract public function register();

    public function handle()
    {
        $this->routing->handleRequest();

    }
}
