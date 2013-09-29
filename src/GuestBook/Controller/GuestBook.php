<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jura
 * Date: 27.09.13
 * Time: 15:57
 * To change this template use File | Settings | File Templates.
 */

namespace GuestBook\Controller;

class GuestBook extends \Core\Controller
{
    public function index_get()
    {
       $this->view->render('GuestBook::GuestBook\index_get.php');
    }

    public function index_test_get()
    {
        echo '<h1>GuestBook index_test_get</h1>';
    }

    public function test_get()
    {
        echo '<h1>GuestBook index_test_get</h1>';
    }
}
