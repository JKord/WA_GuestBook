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

        $al = new AutoLoad($this->bundels);
        $al->allPackages();

        $this->routing = new Routing($this->bundels);
    }

    abstract public function register();

    public function handle()
    {
        $this->routing->handleRequest();

    }
}
