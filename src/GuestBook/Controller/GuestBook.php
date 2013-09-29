<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jura
 * Date: 27.09.13
 * Time: 15:57
 * To change this template use File | Settings | File Templates.
 */

namespace GuestBook\Controller;

use GuestBook\Libraries\RepositoryData;
use GuestBook\Entity\Guest;

class GuestBook extends \Core\Controller
{
    private $view_name = 'GuestBook::GuestBook\index_get.php';

    public function index_get()
    {
       $this->view->render($this->view_name, array('reviews' => RepositoryData::getAll()));
    }

    public function add_post()
    {
        RepositoryData::add( new Guest($this->request));
        header('Location: /GuestBook/guestbook');
    }

    public function index_test_get()
    {
        echo '<h1>GuestBook index_test_get</h1>';
    }
}
