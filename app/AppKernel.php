<?php
require_once 'autoload.php';

use Core\Kernel;

class AppKernel extends Kernel
{
    public function register()
    {
        $this->bundels = array('GuestBook', 'TestRouting');
    }
}
